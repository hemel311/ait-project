<?php

namespace App\Http\Controllers\admin\hidden\time;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Hour;
use Illuminate\Http\Request;

class HourController extends Controller
{
    public function addhour()
    {
        return view('admin.hide.time.hour');
    }

    public function createhour(Request $request)
    {
        Hour::createhour($request);
        return redirect()->back()->with('message','hour add successfully');
    }



}
