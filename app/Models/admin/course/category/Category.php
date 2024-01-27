<?php

namespace App\Models\admin\course\category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','status'];
    protected static $category;
    protected static $image;
    protected static $imageName;
    protected static $imageurl;
    protected static $directory;

    public static function saveImage($request)
    {
        self::$image=$request->file('image');
        if(self::$image)
        {
            self::$imageName='categoryImage'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/category/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageurl=self::$directory.self::$imageName;
            return self::$imageurl;
        }
        else
        {
            return '';
        }
    }

    public static function createNewCourseCategory($request)
    {
        self::$category=new Category();
        self::$category->name=$request->name;
        self::$category->description=$request->description;
        self::$category->image=self::saveImage($request);
        self::$category->status=$request->status;
        self::$category->save();
    }
    public static function updatecategory($request)
    {
        self::$category=Category::find($request->coursecategory_id);
        if($request->file('image'))
        {
            if(file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageurl= self::saveImage($request);
        }
        else
        {
            self::$imageurl=self::$category->image;
        }
        self::$category->name=$request->name;
        self::$category->description=$request->description;
        self::$category->image=self::saveImage($request);
        self::$category->status=$request->status;
        self::$category->save();
    }


}
