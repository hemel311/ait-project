<?php

namespace App\Http\Controllers\admin\course\faq;

use App\Http\Controllers\Controller;
use App\Models\admin\course\category\Category;
use App\Models\admin\course\courses\Course;
use App\Models\admin\course\faq\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $faq;
    protected $deletefaq;
    public function faq()
    {
        return view('admin.course.faq.addfaq',['categories'=>Category::all(),
            'courses'=>Course::all()
            ]);
    }
    public function createnewFaq(Request $request)
    {
        Faq::createNewFaq($request);
        return redirect()->back()->with('message','Faq Created Successfully');
    }
    public function managefaq()
    {
        $this->faq=Faq::all();
        return view('admin.course.faq.managefaq',['faques'=>$this->faq]);
    }
    public function deletefaq($id)
    {
        $this->deletefaq=Faq::find($id);
        $this->deletefaq->delete();
        return redirect()->back()->with('message','faq deleted successfully');
    }
    public function editfaq($id)
    {
        $this->faq=Faq::find($id);
        return view('admin.course.faq.editfaq',['faqinfo'=>$this->faq]);
    }
    public function updatefaq (Request $request)
    {
        Faq::updatefaq($request);
        return redirect()->back()->with('message','Faq updated successfully');
    }
}
