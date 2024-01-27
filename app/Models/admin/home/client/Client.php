<?php

namespace App\Models\admin\home\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['image','status'];

    protected static $image;
    protected static $imageurl;
    protected static $directory;
    protected static $imageName;
    protected static $client;

    public static function saveimage($request)
    {
        self::$image=$request->file('image');

        if (self::$image)
        {
            self::$imageName='clientImage'.time().self::$image->getClientOriginalExtension();
            self::$directory='backend/image/client/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageurl=self::$directory.self::$imageName;
            return self::$imageurl;
        }
        else
        {
            return '';
        }
    }

    public static function addClientLogo($request)
    {
       self::$client=new Client();
       self::$client->image=self::saveimage($request);
       self::$client->status=$request->status;
       self::$client->save();
    }
}
