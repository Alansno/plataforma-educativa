<?php

namespace App\Http\Controllers;

use App\Services\QuizService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    private QuizService $quizService;

    public function __construct(QuizService $quizService) {
        $this->quizService = $quizService;
    }

    public function showQuestion(string $id) {
        $userId = Auth::id();
        return $this->quizService->show($id,$userId);
    }

    public function nextQuestion(Request $request) {
        $userId = Auth::id();
        return $this->quizService->next($request,$userId);
    }

    public function generateCertificate($id) {
        $user = Auth::user()->name;
        return $this->quizService->certificate($user,$id);
    }
}
