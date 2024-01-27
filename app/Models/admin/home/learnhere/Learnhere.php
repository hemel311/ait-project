<?php

namespace App\Models\admin\home\learnhere;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learnhere extends Model
{
    use HasFactory;
    protected $fillable = ['heading', 'shortdescription', 'image', 'status'];

    protected static $whylearnhere;
    protected static $image;
    protected static $imageName;
    protected static $imageUrl;
    protected static $directory;

    public static function saveImage($request)
    {
        self::$image=$request->file('image');
        if(self::$image)
        {
            self::$imageName='subject'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/whylearnhere/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;
            return self::$imageUrl;
        }
        else
        {
            return '';
        }
    }

    public static function createDetails($request)
    {
        self::$whylearnhere=new Learnhere();
        self::$whylearnhere->heading=$request->heading;
        self::$whylearnhere->shortdescription=$request->shortdescription;
        self::$whylearnhere->image=self::saveImage($request);
        self::$whylearnhere->status=$request->status;
        self::$whylearnhere->save();
    }
    public static function updatedetails($request)
    {
        self::$whylearnhere= Learnhere::find($request->details_id);
        if($request->file('image'))
        {
            if(file_exists(self::$whylearnhere->image))
            {
                unlink(self::$whylearnhere->image);
            }
            self::$imageUrl= self::saveImage($request);
        }
        else
        {
            self::$imageUrl=self::$whylearnhere->image;
        }
        self::$whylearnhere->heading=$request->heading;
        self::$whylearnhere->shortdescription=$request->shortdescription;
        self::$whylearnhere->image=self::$imageUrl;
        self::$whylearnhere->status=$request->status;
        self::$whylearnhere->save();
    }
}
