<?php

namespace App\Models\admin\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phone','subject','message'];

    protected static $contactform;

    public static function addcontactinfo($request)
    {
        self::$contactform=new ContactForm();
        self::$contactform->name=$request->name;
        self::$contactform->email=$request->email;
        self::$contactform->phone=$request->phone;
        self::$contactform->subject=$request->subject;
        self::$contactform->message=$request->message;
        self::$contactform->save();
    }
}
