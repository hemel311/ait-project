<?php

namespace App\Models\admin\course\courses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\course\category\Category;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['category_id','name','shortdescription','longdescription','image','price','duration','instructor_id','status'];

    protected static $course;
    protected static $courseimage;
    protected static $imageurl;
    protected static $courseImageName;
    protected static $directory;

    public static function saveImage($request)
    {
        self::$courseimage=$request->file('image');
        if(self::$courseimage)
        {
            self::$courseImageName='courseImage'.time().self::$courseimage->getClientOriginalExtension();
            self::$directory='backend/image/course/';
            self::$courseimage->move(self::$directory,self::$courseImageName);
            self::$imageurl=self::$directory.self::$courseImageName;
            return self::$imageurl;
        }
        else
        {
            return '';
        }
    }
    public static function createNewCourse($request)
    {
        self::$course= new Course();
        self::$course->category_id=$request->category_id;
        self::$course->name=$request->name;
        self::$course->shortdescription=$request->shortdescription;
        self::$course->longdescription=$request->longdescription;
        self::$course->image=self::saveImage($request);
        self::$course->price=$request->price;
        self::$course->duration=$request->duration;
        self::$course->instructor_id=$request->instructor_id;
        self::$course->status=$request->status;
        self::$course->save();
    }
    public function category()
    {
        return $this->belongsTo('App\Models\admin\course\category\Category');
    }
    public function instructor()
    {
        return $this->belongsTo('App\Models\admin\course\instructor\Instructor');
    }
    public static function updatecourse($request)
    {
        self::$course= Course::find($request->course_id);
        if($request->file('image'))
        {
            if(file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageurl= self::saveImage($request);
        }
        else
        {
            self::$imageurl=self::$course->image;
        }
        self::$course->category_id =$request->category_id;
        self::$course->name=$request->name;
        self::$course->shortdescription=$request->shortdescription;
        self::$course->longdescription=$request->longdescription;
        self::$course->image=self::saveImage($request);
        self::$course->price=$request->price;
        self::$course->duration=$request->duration;
        self::$course->instructor_id=$request->instructor_id;
        self::$course->status=$request->status;
        self::$course->save();
    }
}

