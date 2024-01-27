<?php

namespace App\Models\admin\home\review;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['name','review','image'];
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;
    protected static $review;

    public static function saveImage($request)
    {
        self::$image=$request->file('image');
        if(self::$image)
        {
            self::$imageName='review'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/review/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;
            return self::$imageUrl;
        }
        else
        {
            return '';
        }
    }

    public static function CreateReview($request)
    {
        self::$review=new Review();
        self::$review->name=$request->name;
        self::$review->review=$request->review;
        self::$review->image=self::saveImage($request);
        self::$review->status=$request->status;
        self::$review->save();
    }
    public static function updatereview($request)
    {
        self::$review= Review::find($request->review_id);
        if($request->file('image'))
        {
            if(file_exists(self::$review->image))
            {
                unlink(self::$review->image);
            }
            self::$imageUrl= self::saveImage($request);
        }
        else
        {
            self::$imageUrl=self::$review->image;
        }
        self::$review->name=$request->name;
        self::$review->review=$request->review;
        self::$review->image=self::$imageUrl;
        self::$review->status=$request->status;
        self::$review->save();
    }
}
