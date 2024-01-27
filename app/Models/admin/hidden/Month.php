<?php

namespace App\Models\admin\hidden;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;
    protected $fillable =['month'];
    protected static $month;

    public static function createmonth($request)
    {
        self::$month=new Month();
        self::$month->month=$request->month;
        self::$month->save();
    }
}
