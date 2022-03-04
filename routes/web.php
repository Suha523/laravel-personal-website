<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SubServicesController;
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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function () {
        return view('layouts.frontend.index');
    });
    Route::get('/getSkills',[SkillController::class,'getData'])->name('skills.get');
    Route::get('/getServices',[ServiceController::class,'get'])->name('services.get');
    Route::get('/getAllPortfolio',[PortfolioController::class,'getAll'])->name('portfolio.get_all');
    Route::get('/getPortfolio',[PortfolioController::class,'get'])->name('portfolio.get');
    Route::get('/showServices',[ServiceController::class,'getPort'])->name('services.getPort');
    Route::get('/showAllPortfolio',[PortfolioController::class,'show_all'])->name('portfolio.show_all');
    Route::post('/sendEmail',[MessageController::class,'sendEmail'])->name('contact-us.send_email');
    Route::resource('message',MessageController::class);
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('layouts.backend.index');
        })->middleware(['auth'])->name('adminDashboard');
        Route::get('/getSkills',[SkillController::class,'getData'])->name('skills.get');
        Route::post('/deleteSkill',[SkillController::class,'destroy'])->name('skills.delete');
        Route::get('/getSkillEdit',[SkillController::class,'get_edit'])->name('skills.get_edit');
        Route::post('/updateSkill',[SkillController::class,'update'])->name('skills.my_update');
        Route::get('/getServices',[ServiceController::class,'get'])->name('services.get');
        Route::post('/deleteService',[ServiceController::class,'destroy'])->name('services.delete');
        Route::get('/getServiceEdit',[ServiceController::class,'get_edit'])->name('services.get_edit');
        Route::post('/updateService',[ServiceController::class,'update'])->name('services.my_update');
        Route::get('getSubServices',[SubServicesController::class,'get'])->name('sub_services.get');
        Route::post('/deleteSubService',[SubServicesController::class,'destroy'])->name('sub_services.delete');
        Route::get('/getSubServiceEdit',[SubServicesController::class,'get_edit'])->name('sub_services.get_edit');
        Route::post('/updateSubService',[SubServicesController::class,'update'])->name('sub_services.my_update');
        Route::get('/getAllPortfolio',[PortfolioController::class,'getAll'])->name('portfolio.get_all');
        Route::get('/getPortfolio',[PortfolioController::class,'get'])->name('portfolio.get');
        Route::post('/deletePortfolio',[PortfolioController::class,'destroy'])->name('portfolio.delete');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
        Route::resource('skills',SkillController::class);
        Route::resource('services',ServiceController::class);
        Route::resource('sub_services',SubServicesController::class);
        Route::resource('portfolio',PortfolioController::class);

    });



    require __DIR__.'/auth.php';
});

