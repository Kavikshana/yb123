<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateProjectController;
use App\user;
use App\Http\Controllers\UpdateProfiles;
use App\Http\Controllers\StudentprojectController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\AcademicprojectController;
use App\Http\Controllers\IndustrialistprojectController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile',[Frontendcontroller::class, 'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('Home/home');
});

Route::post('/updatestudent',[UpdateProfiles::class, 'updatestudent']);
Route::post('/updateindustrialist',[UpdateProfiles::class, 'updateindustrialist']);
Route::post('/updateacademic',[UpdateProfiles::class, 'updateacademic']);



Route::get('/home',[Frontendcontroller::class, 'home']);
Route::get('/in',[Frontendcontroller::class, 'index']);
Route::get('/ob',[Frontendcontroller::class, 'obj']);
Route::get('/ue',[Frontendcontroller::class, 'upe']);
Route::get('/p',[Frontendcontroller::class, 'pr']);
Route::get('/ss',[Frontendcontroller::class, 'sts']);

Route::get('/h1',[Frontendcontroller::class, 'h']);



Route::get('/fp',[Frontendcontroller::class, 'fgp']);
Route::get('/a',[Frontendcontroller::class, 'a']);

Route::get('/admin',[Frontendcontroller::class, 'admin']);
Route::post('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);
Route::get('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);





Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);

Route::get('/welcome', function () {
    return view('a');
});

Route::get('/urpd',[UserController::class,'sug'])->name('urpd');
Route::get('/urp',[UserController::class,'sugglec'])->name('urp');
Route::get('/create',[UserController::class,'create']);
Route::post('/store',[UserController::class,'store']);
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[UserController::class,'update'])->name('update');
Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('delete');

Route::get('/admindash',[UserController::class,'admindash']);
Route::get('/indd',[UserController::class,'indd']);
Route::get('/stud',[UserController::class,'stud']);
Route::get('/acad',[UserController::class,'acad']);
Route::get('/stusd',[UserController::class,'stusd']);
Route::get('/uped',[UserController::class,'uped']);
Route::post('/registeruser',[UserController::class,'registeruser']);

Route::get('selectu/{user}/', [UserController::class,'selectu'])->name('selectu');


Route::get('/spp',[CreateProjectController::class, 'SProject']);
Route::get('/lpp',[CreateProjectController::class, 'LProject']);
Route::get('/ipp',[CreateProjectController::class, 'IProject']);

Route::get('/create1',[StudentprojectController::class,'create']);

Route::post('/st',[StudentprojectController::class,'store1']);


Route::post('/split',[DescriptionController::class,'split']);

Route::post('/keywords',[DescriptionController::class,'keywords']);

Route::post('/collection',[DescriptionController::class,'index']);

//Route::post('/sto',[DescriptionController::class,'store']);

Route::get('/join',[DescriptionController::class,'join']);
Route::get('/receive',[DescriptionController::class,'receive']);
Route::get('/sql',[StudentprojectController::class,'sql']);

Route::get('/remove',[StudentprojectController::class,'remove']);

Route::post('/check',[StudentprojectController::class,'check']);

Route::get('/createL',[AcademicprojectController::class,'create']);
Route::post('/sto',[AcademicprojectController::class,'store1']);

Route::post('/stor',[IndustrialistprojectController::class,'stor']);

Route::post('/shstu',[UserController::class,'shstu']);
Route::post('/shlec',[UserController::class,'shlec']);

/*Route::get('Admin/Admin',function(){
    $data=App\user::all();
    return view('Admin/Admin')->with('table_data',$data);
});*/




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/