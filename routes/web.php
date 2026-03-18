<?php

use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $feedbacks = Feedback::latest()->take(10)->get();
    return view('landing', compact('feedbacks'));
})->name('landing');

Route::get('/feedback/partial', [FeedbackController::class, 'fetch'])->name('feedback.partial');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/play-audio', function () {
    $path = public_path('audio/kane.mp3');
    return response()->file($path, [
        'Content-Type' => 'audio/mpeg',
        'Accept-Ranges' => 'bytes',
    ]);
}); 