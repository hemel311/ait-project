<?php

namespace App\Http\Controllers\admin\home\topsubject;

use App\Http\Controllers\Controller;
use App\Models\admin\home\topsubject\Topsubject;
use Illuminate\Http\Request;

class TopsubjectController extends Controller
{
    protected $topsubject;
    protected $deletetopsubject;
    public function addtopsubject()
    {
        return view('admin.fronthome.topsubject.addtopsubject');
    }
    public function createtopsubject(Request $request)
    {
        Topsubject::addtopsubject($request);
        return redirect()->back()->with('message','Top subject add successfully');
    }
    public function managetopsubject()
    {
        $this->topsubject= Topsubject::all();
        return view('admin.fronthome.topsubject.managetopsubject',['topsubjects'=>$this->topsubject]);
    }
    public function deletetopsubject($id)
    {
        $this->deletetopsubject=Topsubject::find($id);
        if (file_exists($this->deletetopsubject->image))
        {
            unlink($this->deletetopsubject->image);
        }
        $this->deletetopsubject->delete();
        return redirect()->back()->with('message','Top subject deleted successfully');
    }
    public function edittopsubject($id)
    {
        $this->topsubject=Topsubject::find($id);
        return view('admin.fronthome.topsubject.edittopsubject',['topsubjectinfo'=>$this->topsubject]);
    }
    public function updatetopsubject(Request $request)
    {
        Topsubject::updatetopsubject($request);
        return redirect()->back()->with('message','Top subject updated successfully');
    }
}
