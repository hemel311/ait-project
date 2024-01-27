<?php

namespace App\Models\admin\home\topsubject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topsubject extends Model
{
    use HasFactory;
    protected $fillable=['name','shortdescription','image','status'];

    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageurl;
    protected static $topsubject;


    public static function saveImage($request)
    {
        self::$image=$request->file('image');
        if(self::$image)
        {
            self::$imageName='subject'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/subject/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageurl=self::$directory.self::$imageName;
            return self::$imageurl;
        }
        else
        {
            return '';
        }
    }

    public static function addtopsubject($request)

    {
        self::$topsubject=new Topsubject();
        self::$topsubject->name=$request->name;
        self::$topsubject->shortdescription=$request->shortdescription;
        self::$topsubject->image= self::saveImage($request);
        self::$topsubject->status=$request->status;
        self::$topsubject->save();
    }
    public static function updatetopsubject($request)
    {
        self::$topsubject= Topsubject::find($request->topsubject_id);
        if($request->file('image'))
        {
            if(file_exists(self::$topsubject->image))
            {
                unlink(self::$topsubject->image);
            }
            self::$imageurl= self::saveImage($request);
        }
        else
        {
            self::$imageurl=self::$topsubject->image;
        }
        self::$topsubject->name=$request->name;
        self::$topsubject->shortdescription=$request->shortdescription;
        self::$topsubject->image=self::$imageurl;
        self::$topsubject->status=$request->status;
        self::$topsubject->save();
    }
}
