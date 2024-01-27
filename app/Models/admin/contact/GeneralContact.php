<?php

namespace App\Models\admin\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralContact extends Model
{
    use HasFactory;
    protected $fillable=['email','number','address'];

    protected static  $generalContact;

    public static function AddGeneralContact($request)
    {
        self::$generalContact=new GeneralContact();
        self::$generalContact->email=$request->email;
        self::$generalContact->number=$request->number;
        self::$generalContact->address=$request->address;
        self::$generalContact->save();
    }
}
