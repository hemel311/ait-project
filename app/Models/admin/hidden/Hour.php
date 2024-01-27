<?php

namespace App\Models\admin\hidden;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;
    protected $fillable=['hour'];
    protected static $hour;

    public static function createhour($request)
    {
        self::$hour=new Hour();
        self::$hour->hour=$request->hour;
        self::$hour->save();
    }
}
