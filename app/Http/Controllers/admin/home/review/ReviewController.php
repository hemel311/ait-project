<?php

namespace App\Http\Controllers\admin\home\review;

use App\Http\Controllers\Controller;
use App\Models\admin\home\review\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $review;
    protected $deletereview;

    public function addreview()
    {
        return view('admin.fronthome.studentreview.addstudentreview');
    }
    public function createreview(Request $request)
    {
        Review::CreateReview($request);
        return redirect()->back()->with('message','Review add successfully');
    }
    public function managereview()
    {
        $this->review= Review::all();
        return view('admin.fronthome.studentreview.managestudentreview',['reviews'=>$this->review]);
    }
    public function deletereview($id)
    {
        $this->deletereview=Review::find($id);
        $this->deletereview->delete();
        return redirect()->back()->with('message','Review delete successfully');
    }
    public function editreview($id)
    {
        $this->review=Review::find($id);
        return view('admin.fronthome.studentreview.editstudentreview',['reviewinfo'=>$this->review]);
    }
    public function updatereview(Request $request)
    {
        Review::updatereview($request);
        return redirect()->back()->with('message','Review update successfully');
    }
}
