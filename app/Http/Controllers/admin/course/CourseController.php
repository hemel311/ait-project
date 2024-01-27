<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Models\admin\course\category\Category;
use App\Models\admin\course\courses\Course;
use App\Models\admin\course\instructor\Instructor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $category;
    protected $deletecategory;
    protected $course;
    protected $deletecourse;
    protected $instructor;
    public function coursecategory()
    {
        return view('admin.course.category.category');
    }
    public function createnewcoursecategory(Request $request)
    {
        Category::createNewCourseCategory($request);
        return redirect()->back()->with('message','Category Created Successfully');
    }
    public function managecoursecategory()
    {
        $this->category=Category::orderBY('id',"DESC")->get();
        return view('admin.course.category.managecoursecategory',['coursecategories'=>$this->category]);
    }
    public function deletecourseCategory($id)
    {
        $this->deletecategory=Category::find($id);
        $this->deletecategory->delete();
        return redirect()->back()->with('message','Category deleted Successfully');
    }
    public function editcoursecategory($id)
    {
        $this->category=Category::find($id);
        return view('admin.course.category.editcoursecategory',['categoryinfo'=>$this->category]);
    }
    public function updatecoursecategory(Request $request)
    {
        Category::updatecategory($request);
        return redirect()->back()->with('message','Category updated successfully');
    }
    public function addcourse()
    {
        $this->category=Category::all();
        $this->instructor=Instructor::all();
        return view('admin.course.courses.addcourses',['categories'=>$this->category,
            'instructors'=>$this->instructor
            ]);
    }
    public function createnewcourse(Request $request)
    {
        Course::createNewCourse($request);
        return redirect()->back()->with('message','course create successfully');

    }
    public function managecourse()
    {
        $this->course=Course::all();
        return view('admin.course.courses.managecourse',['courses'=>$this->course]);
    }
    public function deletecourse($id)
    {
        $this->deletecourse=Course::find($id);
        if (file_exists($this->deletecourse->image))
        {
            unlink($this->deletecourse->image);
        }
        $this->deletecourse->delete();
        return redirect()->back()->with('message','course deleted successfully');
    }
    public function editcourse($id)
    {
        $this->course=Course::find($id);
        return view('admin.course.courses.editcourse',['courseinfo'=> $this->course,
            'categories'=>Category::all(),
            'instructor'=>Instructor::all()
            ]);
    }
    public function updatecourse(Request $request)
    {
        Course::updatecourse($request);
        return redirect()->back()->with('message','course updated successfully');
    }
}
