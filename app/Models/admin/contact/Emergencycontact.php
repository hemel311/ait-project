<?php

namespace App\Models\admin\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencycontact extends Model
{
    use HasFactory;
    protected $fillable=['email','firstnumber','secondnumber'];

    protected static  $emergencycontact;

    public static function AddemergencyContact($request)
    {
        self::$emergencycontact=new Emergencycontact();
        self::$emergencycontact->email=$request->email;
        self::$emergencycontact->firstnumber=$request->firstnumber;
        self::$emergencycontact->secondnumber=$request->secondnumber;
        self::$emergencycontact->save();
    }
}
