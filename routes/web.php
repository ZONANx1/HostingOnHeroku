<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataKesihatanController;
use App\Http\Controllers\DataPembelajaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('test', function () {
    return view('test');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function (){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');

     /* ----- Profile Admin------ */
    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

    /* ----- Data Pengguna------ */
    Route::get('show_data_pengguna', [AdminController::class, 'data_pengguna'])->name('admin.show_data_pengguna');
    Route::get('pengguna/records', [AdminController::class, 'recordsadmin'])->name('pengguna/records');
    Route::get('edit_data_pengguna', [AdminController::class, 'index3'])->name('admin.edit_data_pengguna');
     /* ----- Pengguna edit form page admin ------ */
     Route::get('/edit-user/{id}',[AdminController::class, 'editpage']);
     /* ----- Data Pengguna edit page user ------ */
     Route::put('/edited-user/{id}',[AdminController::class, 'edituseradmin']);
     /* ----- Data Pengguna delete page user ------ */
     Route::get('/delete-user/{id}',[AdminController::class,'deleteuseradmin']);

    /* ----- Data Kesihatan------ */
    Route::get('show_data_kesihatan', [DataKesihatanController::class, 'index2'])->name('admin.show_data_kesihatan');
    Route::get('edit_data_kesihatan', [DataKesihatanController::class, 'index3'])->name('admin.edit_data_kesihatan');
    Route::get('kesihatanadmin/records', [DataKesihatanController::class, 'recordsadmin'])->name('kesihatanadmin/records');
    /* ----- Kesihatan edit form page admin ------ */
    Route::get('/edit-kesihatan/{id}',[DataKesihatanController::class, 'editpage']);
    /* ----- Data Kesihatan edit page user ------ */
    Route::put('/edited-kesihatan/{id}',[DataKesihatanController::class, 'editkesihatanadmin']);
    /* ----- Data Kesihatan delete page user ------ */
    Route::get('/delete-kesihatan/{id}',[DataKesihatanController::class,'deletekesihatanadmin']);

    /* ----- Data Pembelajaran------ */
    Route::get('show_data_pembelajaran', [DataPembelajaranController::class, 'index2'])->name('admin.show_data_pembelajaran');
    Route::get('edit_data_pembelajaran', [DataPembelajaranController::class, 'index3'])->name('admin.edit_data_pembelajaran');
    Route::get('pembelajaranadmin/records', [DataPembelajaranController::class, 'recordsadmin'])->name('pembelajaranadmin/records');
    /* ----- Data Pembelajaran edit form page user ------ */
    Route::get('/edit-pembelajaran/{id}',[DataPembelajaranController::class, 'editpage']);
    /* ----- Data Pembelajaran edit page user ------ */
    Route::put('/edited-pembelajaran/{id}',[DataPembelajaranController::class, 'editpembelajaranadmin']);
    /* ----- Data Pembelajaran delete page user ------ */
    Route::get('/delete-pembelajaran/{id}',[DataPembelajaranController::class,'deletepembelajaranadmin']);

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

     /* ----- Profile Pengguna------ */
    Route::post('update-profile-info',[UserController::class,'updateInfo'])->name('userUpdateInfo');
    Route::post('change-profile-picture',[UserController::class,'updatePicture'])->name('userPictureUpdate');
    Route::post('change-password',[UserController::class,'changePassword'])->name('userChangePassword');

     /* ----- Data Kesihatan Pengguna Page------ */
    Route::get('show_data_kesihatan', [DataKesihatanController::class, 'index'])->name('user.show_data_kesihatan');
    Route::get('kesihatan/records', [DataKesihatanController::class, 'recordsuser'])->name('kesihatan/records');
    Route::get('/kesihatan',[DataKesihatanController::class, 'index']);
     /* ----- Data Kesihatan form page ------ */
    Route::get('data_kesihatan', [UserController::class, 'data_kesihatan'])->name('user.data_kesihatan');
    /* ----- Data Kesihatan create page user------ */
    Route::post('create-kesihatan',[DataKesihatanController::class,'createkesihatan'])->name('adminCreateKesihatan');

    /* ----- Data Pembelajaran Pengguna Page------ */
    Route::get('show_data_pembelajaran', [DataPembelajaranController::class, 'index'])->name('user.show_data_pembelajaran');
    Route::get('pembelajaran/records', [DataPembelajaranController::class, 'recordsuser'])->name('pembelajaran/records');
    /* ----- Data Pembelajaran form page ------ */
    Route::get('data_pembelajaran', [UserController::class, 'data_pembelajaran'])->name('user.data_pembelajaran');
    /* ----- Data pembelajaran create page user------ */
    Route::post('create-pembelajaran',[DataPembelajaranController::class,'createpembelajaran'])->name('adminCreatePembelajaran');

    Route::get('/home', 'HomeController@index');

});



