<?php

use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $feedbacks = Feedback::latest()->take(10)->get();
    return view('landing', compact('feedbacks'));
});

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
