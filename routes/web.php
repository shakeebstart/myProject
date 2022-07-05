<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\GetintouchController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\Aboutuscontroller;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProudctsController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\Works_binController;
use App\Models\About;
use App\Models\Category;
use App\Models\Getintouch;
use App\Models\Specification;

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

// Route::prefix('/admin')->namespace('App\http\controllers\Admin')->group(function(){

Route::get('/',[FrontController::class,'home']);
// Route::get('/',[AdminController::class,'login']);
Route::get('login',[AdminController::class,'login']);

Route::post('login',[AdminController::class,'getdata'])->name('login');
Route::get('change_password',[AdminController::class,'change_password'])->name('change_password');
Route::post('update_password',[AdminController::class,'update_password'])->name('update_password');
Route::group(['middleware' =>'Admin'], function () {

Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('logout',[AdminController::class,'logout']);

});
Route::get('category',[CategoryController::class,'index'])->name('category.index');
Route::get('manage_category',[CategoryController::class,'manage_category'])->name('manage_category');
Route::post('manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.insert');
Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete');
Route::get('status/{status}/{id}',[CategoryController::class,'status'])->name('status');
Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
Route::put('update-category/{id}',[CategoryController::class,'update'])->name('update');
Route::get('address',[AddressController::class,'address'])->name('address');
Route::post('manage_address',[AddressController::class,'manage_address'])->name('manage_address');
Route::get('coupon',[CouponController::class,'index'])->name('coupon.index');
Route::get('manage_coupon',[CouponController::class,'manage_coupon'])->name('manage_coupon');
Route::post('manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('.coupon');
Route::get('delete/{id}',[CouponController::class,'delete'])->name('delete');
Route::get('status/{status}/{id}',[CouponController::class,'status'])->name('status');
Route::get('slider',[SliderController::class,'slider'])->name('slider');
Route::get('manage_slider',[SliderController::class,'manage_slider'])->name('manage_slider');
Route::post('manage_slider_process',[SliderController::class,'manage_slider_process'])->name('manage_slider.process');
Route::get('delete/{id}',[SliderController::class,'delete'])->name('delete');
Route::get('editslide/{id}',[SliderController::class,'editslide'])->name('edit.slide');
Route::put('update-slide/{id}',[SliderController::class,'update'])->name('update.slide');


Route::get('works',[WorksController::class,'works'])->name('works');
Route::get('manage_works',[WorksController::class,'manage_works'])->name('manage_works');

Route::post('manage_work_process',[WorksController::class,'manage_work_process'])->name('work.process');
Route::get('delete/{id}',[WorksController::class,'delete'])->name('works.delete');

Route::get('specification',[SpecificationController::class,'specification'])->name('specification');
Route::get('manage_specification',[SpecificationController::class,'manage_specification'])->name('manage_specification');
Route::post('manage_specification_process',[SpecificationController::class,'manage_specification_process'])->name('manage_specification_process');

Route::get('features',[FeaturesController::class,'features'])->name('features');
Route::get('manage_features',[FeaturesController::class,'manage_features'])->name('manage_features');
Route::post('manage_features_process',[FeaturesController::class,'manage_features_process'])->name('manage_features_process');

// Route::post('manage_contact_process',[ContactController::class,'manage_contact_process'])->name('manage_contact_process');
// Route::post('manage_contact',[ContactController::class,'manage_contact'])->name('manage_contact');

Route::get('getintouch',[GetintouchController::class,'getintouch'])->name('getintouch');
Route::post('contact',[FrontController::class,'contact'])->name('contact');

Route::get('aboutus',[Aboutuscontroller::class,'aboutus'])->name('aboutus');
Route::get('aboutservice',[Aboutuscontroller::class,'aboutservice'])->name('aboutservice');
Route::get('aboutdepartment',[Aboutuscontroller::class,'aboutdepartment'])->name('aboutdepartment');
Route::get('services',[Aboutuscontroller::class,'services'])->name('services');
Route::get('contactus',[Aboutuscontroller::class,'contactus'])->name('contactus');

// trash
Route::get('trash',[TrashController::class,'trash'])->name('.trash');
Route::get('softdelete/{id}',[TrashController::class,'softdelete'])->name('softdelete');
Route::get('restore/{id}',[TrashController::class,'restore'])->name('restore');
Route::get('permenentdelete/{id}',[TrashController::class,'permenentdelete'])->name('permenentdelete');

//Works_bin
Route::get('works_bin',[Works_binController::class,'works_bin'])->name('works_bin');
Route::get('softdelete/{id}',[Works_binController::class,'softdelete'])->name('soft.delete');
Route::get('restore_works/{id}',[Works_binController::class,'restore_works'])->name('works.restore');
Route::get('p_delete/{id}',[Works_binController::class,'p_delete'])->name('p.delete');

Route::get('seller_login',[SellerController::class,'seller_login'])->name('seller.login');
Route::post('seller_login',[SellerController::class,'authenticate'])->name('login.authenticate');
// });


//items
Route::get('item',[ItemController::class,'item'])->name('item');
Route::get('item',[ItemController::class,'item'])->name('item');
Route::get('item',[ItemController::class,'item'])->name('item');
Route::get('item',[ItemController::class,'item'])->name('item');
// Route::get('/',[FrontController::class,'index']);
// Route::get('/',[FrontController::class,'slider']);
// Route::get('/',[ProductController::class,'slider']);
// Route::get('/',[FrontController::class,'about']);

//prouducts
Route::get('proudcts',[ProudctsController::class,'proudcts'])->name('proudcts');
Route::get('manage_proudcts',[ProudctsController::class,'manage_proudcts'])->name('manage.proudcts');
Route::post('manage_proudcts_process',[ProudctsController::class,'manage_proudcts_process'])->name('manage_proudcts_process');
Route::post('delete{id}',[ProudctsController::class,'delete'])->name('proudcts.delete');
