<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\admin\contact\AdmissionContact;
use App\Models\admin\contact\Emergencycontact;
use App\Models\admin\contact\GeneralContact;
use App\Models\admin\course\category\Category;
use App\Models\admin\course\courses\Course;
use App\Models\admin\home\client\Client;
use App\Models\admin\home\counter\Counter;
use App\Models\admin\home\event\Event;
use App\Models\admin\home\homefaq\Homefaq;
use App\Models\admin\home\learnhere\Learnhere;
use App\Models\admin\home\review\Review;
use App\Models\admin\home\slide\Slide;
use App\Models\admin\home\topsubject\Topsubject;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $courseCategory;
    protected $category;
    protected $course;
    protected $generalcontact;
    protected $admissioncontact;
    protected $emergencycontact;
    protected $events;
    public function home()
    {
        return view('front.home.home',['slideinfo'=>Slide::orderBy('id', 'DESC')->first(),
            'partnerinfo'=>Client::all(),
            'topsubjecinfo'=>Category::all(),
            'popularcourseinfo'=>Course::all(),
            'learnhere'=>Learnhere::all(),
            'counters'=>Counter::all(),
            'reviews'=>Review::all(),
            'events'=>Event::all()
            ]);
    }
    public function about()
    {
        return view('front.about.about');
    }
    public function courses($id)
    {   $this->courseCategory=Course::where('category_id',$id)->get();
        return view('front.courses.courses',['courses'=>$this->courseCategory,
            'categories'=>Category::find($id)
            ]);
    }
    public function blog()
    {
        return view('front.blog.blog');
    }
    public function contact()
    {
        return view('front.contact.contact',['generalcontact'=>GeneralContact::orderBy('id', 'DESC')->first(),
            'admissioncontact'=>AdmissionContact::orderBy('id', 'DESC')->first(),
            'emergencycontact'=>Emergencycontact::orderBy('id', 'DESC')->first(),
            ]);
    }
    public function coursesingle($id)
    {
        $this->course=Course::find($id);
        return view('front.courses.coursesingle',['courses'=>$this->course]);
    }
    public function blogdetails()
    {
        return view('front.blog.blogdetails');
    }
    public function service()
    {
        return view('front.service.service');
    }
    public function jobplacement()
    {
        return view('front.jobplacement.jobplacement');
    }

}
