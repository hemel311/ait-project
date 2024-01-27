<?php

namespace App\Http\Controllers\admin\hidden\date;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function addyear()
    {
        return view('admin.hide.date.year');
    }

    public function createyear(Request $request)
    {
        Year::createyear($request);
        return redirect()->back()->with('message','Year created successfully');
    }
}
