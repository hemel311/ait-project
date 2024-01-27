<?php

namespace App\Http\Controllers\admin\hidden\date;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function addmonth()
    {
        return view('admin.hide.date.month');
    }
    public function createmonth(Request $request)
    {
        Month::createmonth($request);
        return redirect()->back()->with('message','month add successfully');
    }
}
