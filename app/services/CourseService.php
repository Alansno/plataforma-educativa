<?php

namespace App\Services;
use App\Models\Course;
use App\Models\UserCourse;

class CourseService {

    public function getCourses($userId) {
        return Course::select('courses.id', 'courses.name_course', 'courses.description', 'users_courses.porcentage')
        ->leftJoin('users_courses', function ($join) use ($userId) {
            $join->on('courses.id', '=', 'users_courses.course_id')
                 ->where('users_courses.user_id', '=', $userId);
        })
        ->addSelect(\DB::raw('IF(users_courses.user_id IS NULL, 0, 1) AS tiene_relacion'))
        ->get();
    }

    public function courseInfo($courseId,$userId) {
        return Course::select('courses.id', 'courses.image', 'courses.name_course', 'courses.description', 'users_courses.porcentage')->where('courses.id', $courseId)
        ->leftJoin('users_courses', function ($join) use ($userId) {
            $join->on('courses.id', '=', 'users_courses.course_id')
                 ->where('users_courses.user_id', '=', $userId);
        })->first();
    }
}