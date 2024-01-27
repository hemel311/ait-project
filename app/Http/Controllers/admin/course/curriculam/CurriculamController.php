<?php

namespace App\Http\Controllers\admin\course\curriculam;

use App\Http\Controllers\Controller;
use App\Models\admin\course\category\Category;
use App\Models\admin\course\courses\Course;
use App\Models\admin\course\curriculam\Curriculam;
use Illuminate\Http\Request;

class CurriculamController extends Controller
{
    protected $category;
    protected $courses;
    protected $curriculam;
    protected $deletecurriculam;
    public function curriculam()
    {
        $this->category=Category::all();
        $this->courses=Course::all();
        return view('admin.course.curriculam.addcurriculam',['categories'=>$this->category,
            'courses'=>$this->courses
            ]);
    }
    public function createNewCurriculam(Request $request)
    {
        Curriculam::createNewCurriculam($request);
        return redirect()->back()->with('message','Curriculam Created Successfully');
    }
    public function managecurriculam()
    {
        $this->curriculam=Curriculam::all();
        return view('admin.course.curriculam.managecurriculam',['curriculams'=>$this->curriculam]);
    }
    public function deletetCurriculam($id)
    {
        $this->deletecurriculam=Curriculam::find($id);
        $this->deletecurriculam->delete();
        return redirect()->back()->with('message','course deleted successfully');
    }
    public function editcurriculam($id)
    {
        $this->curriculam=Curriculam::find($id);
        return view('admin.course.curriculam.editcurriculam',['curriculaminfo'=>$this->curriculam]);
    }
    public function updateCurriculam (Request $request)
    {
        Curriculam::updateCurriculam($request);
        return redirect()->back()->with('message','Curriculam updated successfully');
    }

}
