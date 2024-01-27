<?php

namespace App\Http\Controllers\admin\hidden\time;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Miniute;
use Illuminate\Http\Request;

class MiniuteController extends Controller
{
    public function addminiute()
    {
        return view('admin.hide.time.miniute');
    }

    public function createminiute(Request $request)
    {
        Miniute::creatminiute($request);
        return redirect()->back()->with('message','Miniute add successfully');
    }

}
