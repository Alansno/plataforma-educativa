<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    private CourseService $courseService;

    public function __construct(CourseService $courseService) {
        $this->courseService = $courseService;
    }

    public function getCoursesMenu() {
        $userId = Auth::id();
        $courses = $this->courseService->getCourses($userId);
        return view('menu', compact('courses'));
    }

    public function getCourseInfo(string $id) {
        $userId = Auth::id();
        $course = $this->courseService->courseInfo($id,$userId);

        if(!$course->id) return 'El curso no existe';

        return view('course-info', compact('course'));
    }
}
