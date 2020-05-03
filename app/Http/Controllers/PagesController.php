<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Course;
use App\Lesson;
use App\Test;

class PagesController extends Controller 
{
    public function course_list(){
        $user_id = Auth::id();
        $student_info = json_decode(User::where('id', $user_id)->get())[0]; 
        $courses_list = json_decode(DB::table('specialty_course')->where('specialty_id',$student_info->specialty_id)->get());
        $courses = array();
        foreach($courses_list as $cKey=>$c){
            array_push($courses, json_decode(DB::table('courses')->where('id', $c->course_id)
            ->get())[0]);
        }
        $course1_lessons = json_decode(Lesson::where('course_id','4')->select('lesson_name')->orderBy('id')->get());
        $course2_lessons = json_decode(Lesson::where('course_id','5')->select('lesson_name')->orderBy('id')->get());
        $course3_lessons = json_decode(Lesson::where('course_id','6')->select('lesson_name')->orderBy('id')->get());
        return view('courses', compact('courses','course1_lessons','course2_lessons','course3_lessons'));
    }

    // public function ajax_response(){
    //     $user_id = Auth::id();
    //     $student_info = json_decode(User::where('id', $user_id)->get())[0]; 
    //     $courses_list = json_decode(DB::table('specialty_course')->where('specialty_id',$student_info->specialty_id)->get());
    //     $courses = array();
    //     foreach($courses_list as $cKey=>$c){
    //         array_push($courses, json_decode(DB::table('courses')->where('id', $c->course_id)
    //         ->get())[0]);
    //     }
    //     $models = array("ЗСУ 23-4 Шилка","ЗУ 23-2","Стрела-10");
    //     return response()->json(array('courses_list'=> $courses,'models_list'=>$models), 200);
    // }

    public function lesson_info($course_id,$lesson_number){
        $current_lesson = json_decode(Lesson::where('course_id',$course_id)
        ->where('lesson_number',$lesson_number)->get())[0];
        $all_lessons = json_decode(Lesson::orderBy('lesson_number')->get());
        return view('lesson', compact('current_lesson','all_lessons'));
    }

    public function test_info($course_id,$lesson_id){
        $test_questions = json_decode(Test::where('course_id', $course_id)->where('id', $lesson_id)->get())[0];
        $lessons_of_course = json_decode(Lesson::where('course_id', $course_id)->get());
        $lesson_num = sizeof($lessons_of_course);
        $current_lesson_num = json_decode(Lesson::where('course_id',$course_id)->where('id',
        $lesson_id)->select('lesson_number')->get())[0];
        return view('test', compact('test_questions','lesson_num','current_lesson_num'));
    }

    public function store_grade(){
        
    }
}