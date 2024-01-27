<?php

namespace App\Models\admin\home\slide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $fillable=['welcometext','header','buttontext','buttonlink','status'];

    protected static $slide;

    public static function addslide($request)
    {
        self::$slide=new Slide();
        self::$slide->welcometext=$request->welcometext;
        self::$slide->header=$request->header;
        self::$slide->buttontext=$request->buttontext;
        self::$slide->buttonlink=$request->buttonlink;
        self::$slide->status=$request->status;
        self::$slide->save();
    }
    public static function updateslide($request)
    {
        self::$slide=Slide::find($request->slide_id);
        self::$slide->welcometext=$request->welcometext;
        self::$slide->header=$request->header;
        self::$slide->buttontext=$request->buttontext;
        self::$slide->buttonlink=$request->buttonlink;
        self::$slide->status=$request->status;
        self::$slide->save();
    }
}
