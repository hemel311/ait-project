<?php

namespace App\Models\admin\course\instructor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable=['name','designation','number','image','fprofile','lprofile','status'];
    protected static $instructor;
    protected static $instructorImage;
    protected static $instructorImageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveImage($request)
    {
        self::$instructorImage=$request->file('image');

        if (self::$instructorImage)
        {
            self::$instructorImageName='instructorIname'.time().self::$instructorImage->getClientOriginalExtension();
            self::$directory='backend/image/instructor/';
            self::$instructorImage->move(self::$directory,self::$instructorImageName);
            self::$imageUrl=self::$directory.self::$instructorImageName;
            return self::$imageUrl;
        }
        else
        {
            return '';
        }
    }
    public static function createnewInstructor($request)
    {
        self::$instructor=new Instructor();
        self::$instructor->name=$request->name;
        self::$instructor->designation=$request->designation;
        self::$instructor->number=$request->number;
        self::$instructor->image=self::saveImage($request);
        self::$instructor->fprofile=$request->fprofile;
        self::$instructor->lprofile=$request->lprofile;
        self::$instructor->status=$request->status;
        self::$instructor->save();
    }
    public static function updateInstructor($request)
    {
        self::$instructor= Instructor::find($request->instructor_id);
        if($request->file('image'))
        {
            if(file_exists(self::$instructor->image))
            {
                unlink(self::$instructor->image);
            }
            self::$imageUrl= self::saveImage($request);
        }
        else
        {
            self::$imageUrl=self::$instructor->image;
        }
        self::$instructor->name=$request->name;
        self::$instructor->designation=$request->designation;
        self::$instructor->number=$request->number;
        self::$instructor->image=self::$imageUrl;
        self::$instructor->fprofile=$request->fprofile;
        self::$instructor->lprofile=$request->lprofile;
        self::$instructor->status=$request->status;
        self::$instructor->save();
    }
}
