<?php

namespace App\Services;
use App\Models\Course;
use App\Models\QuestionAnswer;
use App\Models\UserCourse;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserAnswer;

class QuizService {

    public function show($courseId,$userId) {
        $course = Course::find($courseId);

        $userCourse = UserCourse::where('user_id', $userId)->where('course_id', $course->id)->select('course_id', 'porcentage')->first();

        if ($userCourse == null) {
            $userCourse = new UserCourse();
        $userCourse->user_id = $userId;
        $userCourse->course_id = $course->id;
        $userCourse->hits = 0;
        $userCourse->save();
        } elseif($userCourse->porcentage == 100.0) {
            UserCourse::where('user_id', $userId)->where('course_id', $course->id)->update(['porcentage' => 0]);

            UserAnswer::where('user_id', $userId)->where('course_id', $course->id)->delete();
        }

        if(!$course) return 'El curso no existe';

        $question = $course->questions()->first();
        $answers = $question->answers()->get();
        return view('course-questions', compact('question', 'answers', 'courseId'));
    }

    public function next($request,$userId) {

        $answerId = $request->input('answer');
        $courseId = $request->input('course_id');
        $questionId = $request->input('question_id');
        $hasQuestion = UserAnswer::where('user_id', $userId)->where('question_id', $questionId)->select('question_id')->get();

        if ($hasQuestion->isEmpty()) {
            $userAnswer = new UserAnswer();
        $userAnswer->user_id = $userId;
        $userAnswer->answer_id = $answerId;
        $userAnswer->course_id = $courseId;
        $userAnswer->question_id = $questionId;
        $userAnswer->save();
        }
        
        $course = Course::find($courseId);
        $totalQuestions = $course->questions()->count();
        $totalAnswers = UserAnswer::where('course_id', $course->id)->where('user_id', $userId)->count();
        $porcentage = ($totalAnswers/$totalQuestions) * 100;

        $userCourse = UserCourse::where('user_id', $userId)->where('course_id', $course->id)->update(['porcentage' => $porcentage]);

        $question = $course->questions()->where('id', '>', $questionId)->first();

        if(!$question) {
            $userAnswers = DB::table('users_answers as ua')
            ->select('ua.*', 'qa.isCorrect')
            ->join('questions_answers as qa', function ($join) {
            $join->on('ua.answer_id', '=', 'qa.answer_id')
             ->on('ua.question_id', '=', 'qa.question_id');
            })
            ->where('ua.course_id', $courseId)
            ->where('user_id', $userId)
            ->get();

            $hits = $userAnswers->filter(function ($value) {
                return $value->isCorrect == 1;
            });

            return view('final-course', compact('hits', 'userAnswers'));
        }

        $answers = $question->answers()->get();

        return view('course-questions', compact('question', 'answers', 'courseId'));
    }
}