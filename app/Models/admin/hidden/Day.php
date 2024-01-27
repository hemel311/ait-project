<?php

namespace App\Models\admin\hidden;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable=['day'];
    protected static $day;

    public static function createday($request)
    {
        self::$day=new Day();
        self::$day->day=$request->day;
        self::$day->save();
    }
}
