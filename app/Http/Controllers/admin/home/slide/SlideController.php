<?php

namespace App\Http\Controllers\admin\home\slide;

use App\Http\Controllers\Controller;
use App\Models\admin\home\slide\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    protected $slideinfo;
    protected $deleteslide;
    public function slide()
    {
        return view('admin.fronthome.slide.addslide');
    }
    public function addslide(Request $request)
    {
        Slide::addslide($request);
        return redirect()->back()->with('message','Slide add successfully');
    }
    public function manageslide()
    {
        $this->slideinfo=Slide::all();
        return view('admin.fronthome.slide.manageslide',['slideinfo'=>$this->slideinfo]);
    }
    public function deleteslide($id)
    {
        $this->deleteslide=Slide::find($id);
        $this->deleteslide->delete();
        return redirect()->back()->with('message','Slide deleted Successfully');
    }
    public function editslide($id)
    {
        $this->slideinfo=Slide::find($id);
        return view('admin.fronthome.slide.editslide',['slideinfo'=>$this->slideinfo]);
    }
    public function updateslide(Request $request)
    {
        Slide::updateslide($request);
        return redirect()->back()->with('message','Slide updated successfully');
    }
}
