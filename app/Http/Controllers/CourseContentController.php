<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\CourseContent;
use Illuminate\Support\Facades\DB;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $course = Courses::find($id);
        $course_contents = CourseContent::where('course_id', $course->id)->get();
        
        return view('course.course_contents')->with('course_contents', $course_contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $course = Courses::find($id);

        if(auth()->user()->id == $course->user_id){
            //return create content
        }
        else{
            //return unauthorization message
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $course = Courses::find($id);

        $data=request()->validate([
            'title'=>'required',
        ]);

        $content = new CourseContent;
        $content->title = $request->input('title');
        $content->course_id = $course->id;
        $course->save();
        
        return redirect('/')->with('success','Content Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = CourseContent::find($id);
        return view('course.content_detail')->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registerCourses($id)
    {

        $check=DB::table('courses')->where('id',$id)->exists();
        if($check){
//            $post = RegisteredCourse::where('user_id', auth()->user()->id);
            $post=DB::table('registered_courses')->where('user_id',auth()->user()->id)
                ->where('course_id',$id)->exists();

            if($post){
                $message='You Have Previously Registered for the Course';
                $key='error';
            }
            else{
                $result=auth()->user()->registercourse()->create([
                    "course_id"=>$id
                ]);
                $message='Registration was Succesfull';
                $key='success';
            }
        }
        else{
            $message='Course Does Not Exist';
            $key='error';
        }

        return back()->with($key,$message);
    }

    public function mycourse($id){
        $check=DB::table('users')->where('id',$id)->exists();

        if($check) {
            $check = DB::table('registered_courses')->where('user_id', $id)->exists();
            if($check) {
                $check = DB::table('registered_courses')->where('user_id', $id)->get();
                $courses = [];
                foreach ($check as $item) {

                    $output = DB::table('courses')->where('id', $item->course_id)->get()[0];

                    array_push($courses, (array)$output);
                }
                $message='';

                return view('frontend.frontend.mycourses',compact('courses','message'));
            }

            else{
                $message="no registered course";
                $courses=[];
                return view('course.mycourses',compact('courses','message'));

            }


        }
        else{
            $courses=[];
            $message='user does not exist';
            return view('course.mycourses',compact('courses','message'))->with('error',$message);

        }

    }
}
