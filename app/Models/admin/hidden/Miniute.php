<?php

namespace App\Models\admin\hidden;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miniute extends Model
{
    use HasFactory;

    protected $fillable=['miniute'];
    protected static $miniute;

    public static function creatminiute($request)
    {
        self::$miniute= new Miniute();
        self::$miniute->miniute=$request->miniute;
        self::$miniute->save();
    }
}
