<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpachiltyController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\Sup_descriptionController;
use App\Http\Controllers\Sup_titleController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function (){
    return view('welcome');
});

Route::prefix('cms/')->middleware('guest:admin')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('view.login');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);

    // Route::get('/auth/redirect', function () {
    //     return Socialite::driver('google')->redirect();
    // })->name('login_google');

    // Route::get('/auth/callback', function () {
    //     $user = Socialite::driver('google')->user();
    //     // Handle authenticated user
    // });

// Route::get('/password/reset', [ForgotPasswordController::class ,'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email',[ForgotPasswordController::class ,'sendResetLinkEmail'] )->name('password_email');
// Route::get('/password/reset/{token}', [ResetPasswordControllert::class ,'showResetForm'])->name('password.reset');
// Route::post('/password/reset', [ResetPasswordControllert::class ,'reset'])->name('password.update')

});

Route::prefix('cms')->group(function(){
Route::get('/password/reset/',[UserAuthController::class ,'showLinkRequestForm'])->name('froget_passeord');
Route::post('/password/email/',[UserAuthController::class ,'forgetPassword'])->name('email_passeord');
Route::post('/password/update_password/',[UserAuthController::class ,'resetPassword'])->name('update_password');
Route::get('/password/rest/',function(){
return view('cms.restpassword.rest');
})->name('reset_password');
});


Route::prefix('cms/admin')->middleware('auth:admin')->group(function(){
    Route::get('logout' , [UserAuthController::class , 'logout'])->name('view.logout');
});

Route::prefix('cms/admin')->middleware('auth:admin')->group(function(){

    Route::get('/', function () {
        return view('cms.home');
    })->name('view_home');

Route::resource('countries',CountryController::class);
Route::post('countries_update/{id}',[CountryController::class,'update'])->name('countries_update');
Route::get('truncate-countriy', [CountryController::class,'truncate'])->name('truncate-countriy');


Route::resource('cities',CityController::class);
Route::post('cities_update/{id}',[CityController::class,'update'])->name('cities_update');
Route::get('truncate-city', [CityController::class,'truncate'])->name('truncate-city');


Route::resource('spachilties',SpachiltyController::class);
Route::post('spachilties_update/{id}',[SpachiltyController::class,'update'])->name('spachilties_update');
Route::get('truncate-spachilty', [SpachiltyController::class,'truncate'])->name('truncate-spachilty');


Route::resource('admins' , AdminController::class);
Route::post('admins_update/{id}' , [AdminController::class , 'update'])->name('admins_update');
Route::get('truncate-admin', [AdminController::class,'truncate'])->name('truncate-admin');


Route::resource('doctors' , DoctorController::class);
Route::post('doctors_update/{id}' , [DoctorController::class , 'update'])->name('doctors_update');
Route::get('truncate-doctor', [DoctorController::class,'truncate'])->name('truncate-doctor');

Route::resource('opinions',OpinionController::class);
Route::post('opinions_update/{id}',[OpinionController::class,'update'])->name('opinions_update');
Route::get('truncate-opinion', [OpinionController::class,'truncate'])->name('truncate-opinion');

Route::resource('services',ServiceController::class);
Route::post('services_update/{id}',[ServiceController::class,'update'])->name('services_update');
Route::get('truncate-service', [ServiceController::class,'truncate'])->name('truncate-service');
Route::get('indexServices', [ServiceController::class,'index'])->name('indexServices');


Route::resource('sup_titles',Sup_titleController::class);
Route::post('sup_titles_update/{id}',[Sup_titleController::class,'update'])->name('sup_titles_update');
Route::get('truncate-sup_title', [Sup_titleController::class,'truncate'])->name('truncate-sup_title');
Route::get('/create/sup_titles/{id}', [Sup_titleController::class, 'createSupTitle'])->name('createSupTitle');
Route::get('/index/sup_titles/{id}', [Sup_titleController::class, 'indexSupTitle'])->name('indexSupTitle');

Route::resource('sup_descriptions',Sup_descriptionController::class);
Route::post('sup_descriptions_update/{id}',[Sup_descriptionController::class,'update'])->name('sup_descriptions_update');
Route::get('truncate-sup_description', [Sup_descriptionController::class,'truncate'])->name('truncate-sup_description');
Route::get('/create/sup_descriptions/{id}', [Sup_descriptionController::class, 'createSupDescription'])->name('createSupDescription');
Route::get('/index/sup_descriptions/{id}', [Sup_descriptionController::class, 'indexSupDescription'])->name('indexSupDescription');

Route::resource('steps',StepController::class);
Route::post('steps_update/{id}',[StepController::class,'update'])->name('steps_update');
Route::get('truncate-step', [StepController::class,'truncate'])->name('truncate-step');
Route::get('/create/steps/{id}', [StepController::class, 'createStep'])->name('createStep');
Route::get('/index/steps/{id}', [StepController::class, 'indexStep'])->name('indexStep');

Route::resource('hospitals',HospitalController::class);
Route::post('hospitals_update/{id}',[HospitalController::class,'update'])->name('hospitals_update');
Route::get('truncate-hospital', [HospitalController::class,'truncate'])->name('truncate-hospital');

Route::resource('contacts',ContactController::class);
Route::post('contacts_update/{id}',[ContactController::class,'update'])->name('contacts_update');
Route::get('truncate-contact', [ContactController::class,'truncate'])->name('truncate-contact');

Route::resource('roles' , RoleController::class);
Route::post('roles_update/{id}' , [RoleController::class , 'update'])->name('roles_update');

Route::resource('permissions' , PermissionController::class);
Route::post('permissions_update/{id}' , [PermissionController::class , 'update'])->name('permissions_update');

Route::resource('roles.permissions' , RolePermissionController::class);
Route::get('roles.permissions/{id}', [RolePermissionController::class,'index'])->name('roles.permissions');

Route::post('changePassword/{id}',[UserAuthController::class ,'changePassword'])->name('changePassword');
Route::get('editProfile/{id}',[UserAuthController::class ,'editProfile'])->name('editProfile');
Route::post('updateProfile/{id}',[UserAuthController::class ,'updateProfile'])->name('updateProfile');



Route::view('view_changePassword','cms.changePassword')->name('view_changePassword');

});


Route::prefix('show/site')->middleware('auth:admin')->group(function(){

Route::view('','front.index')->name('view.index');

Route::view('/about','front.about')->name('view.about');

Route::view('/contact','front.contact')->name('view.contact');

Route::view('/services','front.services')->name('view.services');

Route::view('/staff','front.staff')->name('view.staff');

Route::view('/service/{id}','front.service')->name('view.service');
});

