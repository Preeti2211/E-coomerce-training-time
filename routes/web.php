<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
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
$prod=DB::select("select * from ad_product");
    return view('Ame_Home',['prod'=>$prod]);
});

Route::get('serv/',[HomeController::class,'OurServices']);

Route::get('logi/',[HomeController::class,'Login']);
Route::get('contact/',[HomeController::class,'ContactUs']);
Route::get('reg/',[HomeController::class,'Registraion']);
Route::get('img/',[HomeController::class,'ImageGallary']);
Route::get('noti/',[HomeController::class,'Notification']);
Route::get('regist/',[HomeController::class,'form_con']);
Route::get('dash/',[AdminController::class,'Home_Dash']);
Route::get('cart/',[AdminController::class,'Cart']);
Route::get('chPass/',[AdminController::class,'ChangPassword']);
Route::get('enquri/',[AdminController::class,'EnquiryMgmt']);
Route::get('Feedback/',[AdminController::class,'Feedback']);
Route::get('loginAd/',[AdminController::class,'LoginInfo']);
Route::get('notify/',[AdminController::class,'Notification']);
Route::get('product/',[AdminController::class,'Product']);
Route::get('review/',[AdminController::class,'Review']);
Route::get('da/',[AdminController::class,'dashborad']);
Route::get('cancel/',[HomeController::class,'OurCancellation']);
Route::get('return/',[HomeController::class,'ReturnOrder']);
Route::get('complaint/',[HomeController::class,'Complaint']);
Route::get('bestsellar/',[HomeController::class,'BestSellar']);
Route::get('new/',[HomeController::class,'NewItem']);
Route::get('movers/',[HomeController::class,'Movers']);
Route::get('wished/',[HomeController::class,'wished']);
Route::get('gift/',[HomeController::class,'Gift']);
Route::get('offer',[HomeController::class,'top_offer']);
Route::get('laptop/',[HomeController::class,'Laptop']);
Route::get('toys/',[HomeController::class,'Toys_Beauty']);
Route::get('grocery/',[HomeController::class,'Grocery']);
Route::get('tradinal/',[HomeController::class,'tradinal']);
Route::get('appli/',[HomeController::class,'Appliance']);
Route::get('travel/',[HomeController::class,'travel']);
Route::get('sendUserMail/',[HomeController::class,'sendUserMail']);
Route::get('LogOut/',[AdminController::class,'LogOut']);
Route::get('AddPro/',[AdminController::class,'AddProduct']);
Route::post('CartSave/',[AdminController::class,'CartSave']);
Route::post('displayProd/',[HomeController::class,'displayProd']);

Route::post('savecontact/',[HomeController::class,'savecontact']);
Route::post('savelogin/',[HomeController::class,'savelogin']);
Route::post('saveac/',[HomeController::class,'saveac']);
Route::post('savereview/',[HomeController::class,'savereview']);
Route::get('deleteRecord/{id}',[AdminController::class,'deleteRecord']);

Route::get('deletProduct/{id}',[AdminController::class,'deletProduct']);
Route::post('ChangPassData/',[AdminController::class,'ChangPassData']);




