<?php

namespace App\Http\Controllers\admin\home\event;

use App\Http\Controllers\Controller;
use App\Models\admin\hidden\Day;
use App\Models\admin\hidden\Hour;
use App\Models\admin\hidden\Miniute;
use App\Models\admin\hidden\Month;
use App\Models\admin\hidden\Year;
use App\Models\admin\home\event\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $day;
    protected $month;
    protected $year;
    protected $miniute;
    protected $hour;
    protected $event;
    protected $deleteevent;
    public function addevent()
    {

        return view('admin.fronthome.event.addevent',['day'=>Day::all(),
            'month'=>Month::all(),
            'year'=>Year::all(),
            'hour'=>Hour::all(),
            'miniute'=>Miniute::all()
            ]);
    }
    public function  createevent(Request $request)
    {
        Event::createEvent($request);
        return redirect()->back()->with('message','Event Created successfully');
    }
    public function manageevent()
    {
        $this->event=Event::all();
        return view('admin.fronthome.event.manageevent',['events'=>$this->event]);
    }
    public function deleteevent($id)
    {
        $this->deleteevent=Event::find($id);
        if (file_exists($this->deleteevent->image))
        {
            unlink($this->deleteevent->image);
        }
        $this->deleteevent->delete();
        return redirect()->back()->with('message','Event deleted successfully');
    }
    public function editevent($id)
    {
        $this->event=Event::find($id);
        return view('admin.fronthome.event.editevent',['day'=>Day::all(),
            'month'=>Month::all(),
            'year'=>Year::all(),
            'hour'=>Hour::all(),
            'miniute'=>Miniute::all(),
            'event'=>$this->event
            ]);
    }
    public function updateevent(Request $request)
    {
        Event::updateevent($request);
        return redirect()->back()->with('message','Event details update successfully');
    }
}
