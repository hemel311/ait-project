<?php

namespace App\Http\Controllers\admin\home\learnhere;

use App\Http\Controllers\Controller;
use App\Models\admin\home\learnhere\Learnhere;
use Illuminate\Http\Request;

class LearnhereController extends Controller
{
    protected $learnhere;
    protected $deletelearnhere;
    public function adddetails()
    {
        return view('admin.fronthome.learnhere.adddetails');
    }

    public function createdetails(Request $request)
    {
        Learnhere::createDetails($request);
        return redirect()->back()->with('message','Details add successfully');
    }
    public function managelearnhere()
    {
        $this->learnhere = Learnhere::all();

        return view('admin.fronthome.learnhere.managedetails',['learnhere'=>$this->learnhere]);
    }

    public function deletedetails($id)
    {
        $this->deletelearnhere=Learnhere::find($id);
        $this->deletelearnhere->delete();
        return redirect()->back()->with('message','Details Delete successfully');
    }
    public function editdetails($id)
    {
        $this->learnhere=Learnhere::find($id);
        return view('admin.fronthome.learnhere.editdetails',['detail'=>$this->learnhere]);
    }
    public function updatedetails(Request $request)
    {
        Learnhere::updatedetails($request);
        return redirect()->back()->with('message','Details Update successfully');
    }

}
