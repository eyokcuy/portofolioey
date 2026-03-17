<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(12);
        return view('feedbacks.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        $feedback = Feedback::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your feedback! It means a lot to me.',
                'data' => $feedback
            ]);
        }

        return back()->with('success', 'Thank you for your feedback! It means a lot to me.');
    }
}
