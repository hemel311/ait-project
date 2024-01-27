<?php

namespace App\Models\admin\hidden;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $fillable=['year'];
    protected static $year;

    public static function createyear($request)
    {
        self::$year=new Year();
        self::$year->year=$request->year;
        self::$year->save();
    }
}
