<?php

namespace App\Models\admin\course\faq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable=['category_id','course_id','question','answer','status'];
    protected static $faq;

    public static function createNewFaq($request)
    {
        self::$faq= new Faq();
        self::$faq->category_id=$request->category_id;
        self::$faq->course_id=$request->course_id;
        self::$faq->question=$request->question;
        self::$faq->answer=$request->answer;
        self::$faq->status=$request->status;
        self::$faq->save();

    }
    public static function updatefaq($request)
    {
        self::$faq=Faq::find($request->faq_id);
        self::$faq->category_id=$request->category_id;
        self::$faq->course_id=$request->course_id;
        self::$faq->question=$request->question;
        self::$faq->answer=$request->answer;
        self::$faq->status=$request->status;
        self::$faq->save();
    }
    public function category()
    {
        return $this->belongsTo('App\Models\admin\course\category\Category');
    }
    public function course()
    {
        return $this->belongsTo('App\Models\admin\course\courses\Course');
    }
}
