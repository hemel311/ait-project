<?php

namespace App\Models\admin\home\counter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    protected static $counter;
    protected $fillable=['heading','number','prefix','status',];

    public static function createCounter($request)
    {
        self::$counter=new Counter();
        self::$counter->heading=$request->heading;
        self::$counter->number=$request->number;
        self::$counter->prefix=$request->prefix;
        self::$counter->status=$request->status;
        self::$counter->save();
    }

    public static function updatecounterdetails($request)
    {
        self::$counter=Counter::find($request->counter_id);
        self::$counter->heading=$request->heading;
        self::$counter->number=$request->number;
        self::$counter->prefix=$request->prefix;
        self::$counter->status=$request->status;
        self::$counter->save();
    }
}
