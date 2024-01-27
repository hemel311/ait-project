<?php

namespace App\Http\Controllers\admin\course\instructor;

use App\Http\Controllers\Controller;
use App\Models\admin\course\curriculam\Curriculam;
use App\Models\admin\course\instructor\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    protected $instructor;
    protected $deleteinstructor;
    public function instructor()
    {
        return view('admin.course.instructor.addinstructor');
    }
    public function createnewinstructor(Request $request)
    {
        Instructor::createnewInstructor($request);
        return redirect()->back()->with('message','instructor created successfully');
    }
    public function manageinstructor()
    {
        $this->instructor=Instructor::all();
        return view('admin.course.instructor.manageinstructor',['instroctors'=>$this->instructor]);
    }
    public function editinstructor($id)
    {
        $this->instructor=Instructor::find($id);
        return view('admin.course.instructor.editinstructor',['instructorinfo'=>$this->instructor]);
    }
    public function deleteinstructor ($id)
    {
        $this->deleteinstructor=Instructor::find($id);
        if (file_exists($this->deleteinstructor->image))
        {
            unlink($this->deleteinstructor->image);
        }
        $this->deleteinstructor->delete();
        return redirect()->back()->with('message','Instructor deleted successfully');
    }
    public function updateInstructor(Request $request)
    {
        Instructor::updateInstructor($request);
        return redirect()->back()->with('message','Instructor Update successfully');
    }
}
