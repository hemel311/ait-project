<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[
    'uses'=> 'App\Http\Controllers\front\FrontController@home',
    'as'  =>'home'
]);
Route::get('/about',[
    'uses'=> 'App\Http\Controllers\front\FrontController@about',
    'as'  =>'about'
]);
Route::get('/courses/{id}',[
    'uses'=> 'App\Http\Controllers\front\FrontController@courses',
    'as'  =>'courses'
]);
Route::get('/blog',[
    'uses'=> 'App\Http\Controllers\front\FrontController@blog',
    'as'  =>'blog'
]);
Route::get('/contact',[
    'uses'=> 'App\Http\Controllers\front\FrontController@contact',
    'as'  =>'contact'
]);
Route::get('/course-single/{id}',[
    'uses'=> 'App\Http\Controllers\front\FrontController@coursesingle',
    'as'  =>'coursesingle'
]);
Route::get('/blog-details',[
    'uses'=> 'App\Http\Controllers\front\FrontController@blogdetails',
    'as'  =>'blogdetails'
]);
Route::get('/service',[
    'uses'=> 'App\Http\Controllers\front\FrontController@service',
    'as'  =>'service'
]);
Route::get('/jobplacement',[
    'uses'=> 'App\Http\Controllers\front\FrontController@jobplacement',
    'as'  =>'jobplacement'
]);
Route::post('/contact-form',[
    'uses'=>'App\Http\Controllers\admin\contact\ContactController@contactform',
    'as'=>'contact-form'
]);
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[
        'uses'=>'App\Http\Controllers\admin\AdminController@dashboard',
        'as'  =>'dashboard'
    ]);
    Route::get('/add-course-category',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@coursecategory',
        'as'  =>'addcoursecategory'
    ]);
    Route::post('/create-new-course-category',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@createnewcoursecategory',
        'as'  =>'createnewcoursecategory'
    ]);
    Route::get('/manage-course-category',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@managecoursecategory',
        'as'  =>'managecoursecategory'
    ]);
    Route::get('/delete-course-category/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@deletecourseCategory',
        'as'  =>'deletecourseCategory'
    ]);
    Route::get('/edit-course-category/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@editcoursecategory',
        'as'=>'editcoursecategory'
    ]);
    Route::post('/update-course-category',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@updatecoursecategory',
        'as'=>'updatecoursecategory'
    ]);
    Route::get('/add-course',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@addcourse',
        'as'=>'addcourse'
    ]);
    Route::post('/create-new-course',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@createnewcourse',
        'as'=>'createnewcourse'
    ]);
    Route::get('/manage-course',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@managecourse',
        'as'=>'managecourse'
    ]);
    Route::get('/delete-course/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@deletecourse',
        'as'=>'deletecourse'
    ]);
    Route::get('/edit-course/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@editcourse',
        'as'=>'editcourse'
    ]);
    Route::post('/update-course',[
        'uses'=>'App\Http\Controllers\admin\course\CourseController@updatecourse',
        'as'=>'updatecourse'
    ]);
    Route::get('/add-curriculam',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@curriculam',
        'as'=>'curriculam'
    ]);
    Route::post('/create-new-curriculam',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@createNewCurriculam',
        'as'=>'create-new-curriculam'
    ]);
    Route::get('/manage-curriculam',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@managecurriculam',
        'as'=>'managecurriculam'
    ]);
    Route::get('/edit-curriculam/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@editCurriculam',
        'as'=>'edit-curriculam'
    ]);
    Route::get('/delete-curriculam/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@deletetCurriculam',
        'as'=>'delete-curriculam'
    ]);
    Route::post('/update-curriculam',[
        'uses'=>'App\Http\Controllers\admin\course\curriculam\CurriculamController@updateCurriculam',
        'as'=>'update-curriculam'
    ]);
    Route::get('/add-instructor',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@instructor',
        'as'=>'instructor'
    ]);
    Route::post('/create-new-instructor',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@createnewinstructor',
        'as'=>'createnewinstructor'
    ]);
    Route::get('/manage-instructor',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@manageinstructor',
        'as'=>'manageinstructor'
    ]);
    Route::get('/edit-instructor/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@editinstructor',
        'as'=>'editinstructor'
    ]);
    Route::get('/delete-instructor/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@deleteinstructor',
        'as'=>'deleteinstructor'
    ]);
    Route::post('/update-instructor',[
        'uses'=>'App\Http\Controllers\admin\course\instructor\InstructorController@updateInstructor',
        'as'=>'update-instructor'
    ]);
    Route::get('/add-faq',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@faq',
        'as'=>'addfaq'
    ]);
    Route::post('/create-new-faq',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@createnewFaq',
        'as'=>'create-new-faq'
    ]);
    Route::get('/manage-faq',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@managefaq',
        'as'=>'manage-faq'
    ]);
    Route::get('/edit-faq/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@editfaq',
        'as'=>'edit-faq'
    ]);
    Route::get('/delete-faq/{id}',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@deletefaq',
        'as'=>'delete-faq'
    ]);
    Route::post('/update-faq',[
        'uses'=>'App\Http\Controllers\admin\course\faq\FaqController@updatefaq',
        'as'=>'update-faq'
    ]);
    Route::get('/general-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@genrealContact',
        'as'=>'general-contact'
    ]);
    Route::post('/add-general-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@addgeneralContact',
        'as'=>'add-general-contact'
    ]);
    Route::get('/admission-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@admissionContact',
        'as'=>'admission-contact'
    ]);
    Route::post('/add-admission-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@addadmissionContact',
        'as'=>'add-admission-contact'
    ]);
    Route::get('/emergency-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@emergencyContact',
        'as'=>'emergency-contact'
    ]);
    Route::post('/add-emergency-contact',[
        'uses'=>'App\Http\Controllers\admin\contact\ContactController@AddemergencyContact',
        'as'=>'add-emergency-contact'
    ]);
    Route::get('/manage-contact',[
       'uses'=> 'App\Http\Controllers\admin\contact\ContactController@managecontacts',
        'as'=>'manage-contact'
    ]);
    Route::get('/delete-contact/{id}',[
        'uses'=> 'App\Http\Controllers\admin\contact\ContactController@deleteconttact',
        'as'=>'delete-contact'
    ]);
    Route::get('/add-slide',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@slide',
        'as'=>'add-slide'
    ]);
    Route::post('/add-new-slide',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@addslide',
        'as'=>'add-new-slide'
    ]);
    Route::get('/manage-slide',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@manageslide',
        'as'=>'manage-slide'
    ]);
    Route::get('/delete-slide/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@deleteslide',
        'as'=>'delete-slide'
    ]);
    Route::get('/edit-slide/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@editslide',
        'as'=>'edit-slide'
    ]);
    Route::post('/update-slide',[
        'uses'=> 'App\Http\Controllers\admin\home\slide\SlideController@updateslide',
        'as'=>'update-slide'
    ]);
    Route::get('/client',[
        'uses'=> 'App\Http\Controllers\admin\home\client\ClientController@client',
        'as'=>'client'
    ]);
    Route::post('/add-new-client',[
        'uses'=> 'App\Http\Controllers\admin\home\client\ClientController@addclient',
        'as'=>'addclient'
    ]);
    Route::get('/manage-client',[
        'uses'=> 'App\Http\Controllers\admin\home\client\ClientController@manageclient',
        'as'=>'manageclient'
    ]);
    Route::get('/delete-client/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\client\ClientController@deleteclient',
        'as'=>'deleteclient'
    ]);
    Route::get('/add-top-subject',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@addtopsubject',
        'as'=>'addtopsubject'
    ]);
    Route::post('/add-new-top-subject',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@createtopsubject',
        'as'=>'addnewtopsubject'
    ]);
    Route::get('/manage-top-subject',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@managetopsubject',
        'as'=>'managetopsubject'
    ]);
    Route::get('/delete-top-subject/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@deletetopsubject',
        'as'=>'deletetopsubject'
    ]);
    Route::get('/edit-top-subject/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@edittopsubject',
        'as'=>'edittopsubject'
    ]);
    Route::post('/update-top-subject',[
        'uses'=> 'App\Http\Controllers\admin\home\topsubject\TopsubjectController@updatetopsubject',
        'as'=>'updatetopsubject'
    ]);
    Route::get('/add-details',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@adddetails',
        'as'=>'adddetails'
    ]);
    Route::post('/create-details',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@createdetails',
        'as'=>'createdetails'
    ]);
    Route::get('/manage-learn-here',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@managelearnhere',
        'as'=>'managelearnhere'
    ]);
    Route::get('/delete-learn-here/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@deletedetails',
        'as'=>'deletelearnhere'
    ]);
    Route::get('/edit-learn-here/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@editdetails',
        'as'=>'editdetails'
    ]);
    Route::post('/update-details',[
        'uses'=> 'App\Http\Controllers\admin\home\learnhere\LearnhereController@updatedetails',
        'as'=>'updatedetails'
    ]);
    Route::get('/add-counter',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@addcounter',
        'as'=>'addcounter'
    ]);
    Route::post('/create-counter',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@createCounter',
        'as'=>'createCounter'
    ]);
    Route::get('/manage-counter',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@managecounter',
        'as'=>'managecounter'
    ]);
    Route::get('/delete-counter/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@deletecounter',
        'as'=>'deletecounter'
    ]);
    Route::get('/edit-counter/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@editcounter',
        'as'=>'editcounter'
    ]);
    Route::post('/update-counter',[
        'uses'=> 'App\Http\Controllers\admin\home\counter\CounterController@updatecounter',
        'as'=>'updatecounter'
    ]);
    Route::get('/add-review',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@addreview',
        'as'=>'addreview'
    ]);
    Route::post('/create-review',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@createreview',
        'as'=>'createreview'
    ]);
    Route::get('/manage-review',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@managereview',
        'as'=>'managereview'
    ]);
    Route::get('/delete-review/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@deletereview',
        'as'=>'deletereview'
    ]);
    Route::get('/edit-review/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@editreview',
        'as'=>'editreview'
    ]);
    Route::post('/update-review',[
        'uses'=> 'App\Http\Controllers\admin\home\review\ReviewController@updatereview',
        'as'=>'updatereview'
    ]);
    Route::get('/add-event',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@addevent',
        'as'=>'addevent'
    ]);
    Route::post('/create-event',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@createevent',
        'as'=>'createevent'
    ]);
    Route::get('/add-day',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\Daycontroller@addday',
        'as'=>'addday'
    ]);
    Route::post('/create-day',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\Daycontroller@createday',
        'as'=>'createday'
    ]);
    Route::get('/add-month',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\MonthController@addmonth',
        'as'=>'addmonth'
    ]);
    Route::post('/create-month',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\MonthController@createmonth',
        'as'=>'createmonth'
    ]);
    Route::get('/add-year',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\YearController@addyear',
        'as'=>'addyear'
    ]);
    Route::post('/create-year',[
        'uses'=> 'App\Http\Controllers\admin\hidden\date\YearController@createyear',
        'as'=>'createyear'
    ]);
    Route::get('/add-hour',[
        'uses'=> 'App\Http\Controllers\admin\hidden\time\HourController@addhour',
        'as'=>'addhour'
    ]);
    Route::post('/create-hour',[
        'uses'=> 'App\Http\Controllers\admin\hidden\time\HourController@createhour',
        'as'=>'createhour'
    ]);
    Route::get('/add-miniute',[
        'uses'=> 'App\Http\Controllers\admin\hidden\time\MiniuteController@addminiute',
        'as'=>'addminiute'
    ]);
    Route::post('/create-miniute',[
        'uses'=> 'App\Http\Controllers\admin\hidden\time\MiniuteController@createminiute',
        'as'=>'createminiute'
    ]);
    Route::get('/manage-event',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@manageevent',
        'as'=>'manageevent'
    ]);
    Route::get('/delete-event/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@deleteevent',
        'as'=>'deleteevent'
    ]);
    Route::get('/edit-event/{id}',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@editevent',
        'as'=>'editevent'
    ]);
    Route::post('/update-event',[
        'uses'=> 'App\Http\Controllers\admin\home\event\EventController@updateevent',
        'as'=>'updateevent'
    ]);
});
