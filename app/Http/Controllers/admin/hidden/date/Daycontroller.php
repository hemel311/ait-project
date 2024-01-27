<?php

namespace App\Http\Controllers\admin\hidden\date;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Day;
use Illuminate\Http\Request;

class Daycontroller extends Controller
{
    public function addday()
    {
        return view('admin.hide.date.day');
    }
    public function createday(Request $request)
    {
        Day::createday($request);
        return redirect()->back()->with('message','day add successfully');
    }
}
