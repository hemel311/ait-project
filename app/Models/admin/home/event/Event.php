<?php

namespace App\Models\admin\home\event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=['name','shortdescription','day','month','year','from_hour','from_miniute','form_am_pm','to_hour','to_miniute','to_am_pm','image','status'];
    protected static $event;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveImage($request)
    {
        self::$image=$request->file('image');
        if(self::$image)
        {
            self::$imageName='event'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/event/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;
            return self::$imageUrl;
        }
        else
        {
            return '';
        }
    }
    public static function createEvent($request)
    {
        self::$event=new Event();
        self::$event->name=$request->name;
        self::$event->shortdescription=$request->shortdescription;
        self::$event->day=$request->day;
        self::$event->month=$request->month;
        self::$event->year=$request->year;
        self::$event->from_hour=$request->from_hour;
        self::$event->from_miniute=$request->from_miniute;
        self::$event->form_am_pm=$request->form_am_pm;
        self::$event->to_hour=$request->to_hour;
        self::$event->to_miniute=$request->to_miniute;
        self::$event->to_am_pm=$request->to_am_pm;
        self::$event->image=self::saveImage($request);
        self::$event->status=$request->status;
        self::$event->save();
    }
    public static function updateevent($request)
    {
        self::$event=Event::find($request->event_id);
        if($request->file('image'))
        {
            if(file_exists(self::$event->image))
            {
                unlink(self::$event->image);
            }
            self::$imageUrl=self::saveImage($request);
        }
        else
        {
            self::$imageUrl=self::$event->image;
            self::$event->name=$request->name;
            self::$event->shortdescription=$request->shortdescription;
            self::$event->day=$request->day;
            self::$event->month=$request->month;
            self::$event->year=$request->year;
            self::$event->from_hour=$request->from_hour;
            self::$event->from_miniute=$request->from_miniute;
            self::$event->form_am_pm=$request->form_am_pm;
            self::$event->to_hour=$request->to_hour;
            self::$event->to_miniute=$request->to_miniute;
            self::$event->to_am_pm=$request->to_am_pm;
            self::$event->image=self::saveImage($request);
            self::$event->status=$request->status;
            self::$event->save();
        }
    }


}
