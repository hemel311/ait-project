<?php

namespace App\Models\admin\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionContact extends Model
{
    use HasFactory;
    protected $fillable=['email','firstnumber','secondnumber'];

    protected static  $admissionContact;

    public static function AddadmissionContact($request)
    {
        self::$admissionContact=new AdmissionContact();
        self::$admissionContact->email=$request->email;
        self::$admissionContact->firstnumber=$request->firstnumber;
        self::$admissionContact->secondnumber=$request->secondnumber;
        self::$admissionContact->save();
    }
}
