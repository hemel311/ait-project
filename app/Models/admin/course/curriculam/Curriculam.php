<?php

namespace App\Models\admin\course\curriculam;

use App\Models\admin\course\category\Category;
use App\Models\admin\course\courses\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculam extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'course_id', 'heading', 'description', 'status'];

    protected static $curriculam;

    public static function createNewCurriculam($request)
    {
        self::$curriculam= new Curriculam();
        self::$curriculam->category_id=$request->category_id;
        self::$curriculam->course_id=$request->course_id;
        self::$curriculam->heading=$request->heading;
        self::$curriculam->description=$request->description;
        self::$curriculam->status=$request->status;
        self::$curriculam->save();
    }
    public static function updateCurriculam($request)
    {
        self::$curriculam=Curriculam::find($request->curriculam_id);
        self::$curriculam->category_id=$request->category_id;
        self::$curriculam->course_id=$request->course_id;
        self::$curriculam->heading=$request->heading;
        self::$curriculam->description=$request->description;
        self::$curriculam->status=$request->status;
        self::$curriculam->save();
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
