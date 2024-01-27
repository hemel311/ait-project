<?php

namespace App\Http\Controllers\admin\home\counter;

use App\Http\Controllers\Controller;
use App\Models\admin\home\counter\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    protected $counter;
    protected $deletecounter;
    public function addcounter()
    {
        return view('admin.fronthome.counter.addcounter');
    }
    public function createCounter(Request $request)
    {
        Counter::createCounter($request);
        return redirect()->back()->with('message','Counter Create Successfully');
    }
    public function managecounter()
    {
        $this->counter=Counter::all();
        return view('admin.fronthome.counter.managecounter',['counter'=>$this->counter]);
    }
    public function deletecounter($id)
    {
        $this->deletecounter=Counter::find($id);
        $this->deletecounter->delete();
        return redirect()->back()->with('message','counters deleted successfully');
    }
    public function editcounter($id)
    {
        $this->counter=Counter::find($id);
        return view('admin.fronthome.counter.editcounter',['counterinfo'=>$this->counter]);
    }
    public function updatecounter(Request $request)
    {
        Counter::updatecounterdetails($request);
        return redirect()->back()->with('message','Counter details update successfully');
    }
}
