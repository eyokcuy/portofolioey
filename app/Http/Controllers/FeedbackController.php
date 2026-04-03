<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter; 

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(12);
        return view('feedbacks.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $key = 'send-feedback:'.$request->ip();

        if (RateLimiter::tooManyAttempts($key, $perMinute = 1)) {
            $seconds = RateLimiter::availableIn($key);
            return response()->json([
                'success' => false,
                'message' => "Tunggu sebentar ya! Silakan kirim feedback lagi dalam {$seconds} detik.",
                'remaining' => $seconds
            ], 429);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        $feedback = Feedback::create($validated);
        
        // Hit the rate limiter ONLY after successful creation
        RateLimiter::hit('send-feedback:'.$request->ip(), $decayRate = 60);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your feedback! It means a lot to me.',
                'data' => $feedback
            ]);
        }

        return back()->with('success', 'Thank you for your feedback! It means a lot to me.');
    }

    public function fetch()
    {
        $feedbacks = Feedback::latest()->take(10)->get();
        return view('components.feedback', compact('feedbacks'))->fragment('feedback-list');
    }
}
