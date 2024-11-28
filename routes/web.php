<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riydig_view;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[riydig_view::class,  'return_home_view']);
/**
 * ********************************************************
 * ***********English Section*****************
 * ********************************************************
 */
// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Route::get('/services',function(){
//     return view("services");
// })->name('service');


Route::get('/',[riydig_view::class,  'return_home_view'])->name("website-home");

Route::get('/services',[riydig_view::class,  'return_services_view'])->name("services-name");

Route::get('/services_distinict',[riydig_view::class,  'return_distinict_data_api']);


Route::get('/about',[riydig_view::class,  'return_about_view'])->name("about-name");
// Route::get('/clients',[riydig_view::class,  'return_clients_view'])->name("clients-name");
Route::get('/contact',[riydig_view::class,  'return_contact_view'])->name("contact-name");
Route::get('/portfolio',[riydig_view::class,  'return_portfolio_view'])->name("portfolio-name");
// Conatct US Action
Route::post('/contact_us',[riydig_view::class,  'contact_us'])->name("Contact_us-name");
// Single_Services 

Route::get('/service/{id}',[riydig_view::class,  'service_view']);
// Singel Service
Route::get('/singleBlog/{id}',[riydig_view::class,  'Single_Blog_view']);
// Blogs
Route::get('/blogs',[riydig_view::class,  'Blogs_view']);


// Route::get('/service/SEO',[riydig_view::class,  'SEO_view'])->name("SEO-name");
// Route::get('/service/AEO',[riydig_view::class,  'AEO_view'])->name("AEO-name");
// Route::get('/service/SEM',[riydig_view::class,  'SEM_view'])->name("SEM-name");
// Route::get('/service/Brand_Strategy',[riydig_view::class,  'Brand_Strategy_view'])->name("Brand_Strategy-name");
// Route::get('/service/Brand_Identity',[riydig_view::class,  'Brand_Identity_view'])->name("Brand_Identity-name");
// Route::get('/service/Marketing_Strategy',[riydig_view::class,  'Marketing_Strategy_view'])->name("Marketing_Strategy-name");
// Route::get('/service/Social_Media_Marketing',[riydig_view::class,  'Social_Media_Marketing_view'])->name("social_media-name");
// Route::get('/service/Influncer_Marketing',[riydig_view::class,  'Influncer_Marketing_view'])->name("Influncer_Marketing-name");
// Route::get('/service/Media_Buying',[riydig_view::class,  'Media_Buying_view'])->name("Media_Buying-name");
// Route::get('/service/OOH',[riydig_view::class,  'OOH_view'])->name("OOH-name");
// Route::get('/service/Website',[riydig_view::class,  'Website_view'])->name("Website-name");
// Route::get('/service/Mobile_App',[riydig_view::class,  'Mobile_App_view'])->name("Mobile_App-name");



Route::group(['middleware' => 'guest'], function () {
    Route::get('/view-register', function(){return view('auth.register');})->name("view-register");


    Route::post('/registerpost', [AuthController::class, 'registerPost'])->name('register');

    Route::get('/login',function(){return view('auth.login');})->name("view-login");

    Route::post('/loginpost', [AuthController::class, 'loginPost'])->name('login');
  });




/**
 * ***************************
 * Admin Pages****************
 * ***************************
 */
        Route::get('/mainPage', [AuthController::class, 'index'])->name("mainPage");
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        /**
         * Services Section
         */
        Route::get('/addServices', [AuthController::class, 'addNewServices']);
        Route::POST('/addServices_post', [AuthController::class, 'addNewServices_post'])->name('addservice_post_name');

        Route::get('/DisplayServices', [AuthController::class, 'DisplayServices']);
        // Route::POST('/Display_services', [AuthController::class, 'Display_services']);
        Route::POST('/deleteService/{id}', [AuthController::class, 'deleteService']);
        Route::get('/updateServices/{id}', [AuthController::class, 'updateService']);
        Route::post('UpdateService_post/{id}', [AuthController::class, 'updateService_post'])->name('UpdateService_post_name');
            /**
             * 
             * End Service Section
             */
            /**
             *Start Contact US Section
             */
        Route::get('/contactUSAdmin', [AuthController::class, 'contactUsAdmin']);
        Route::post('/updateContact/{id}', [AuthController::class, 'updateContact']);
            
            /**
             *END Contact US Section
             */

            /**
             * Projects Section
             */
        Route::get('/AddNewProject', [AuthController::class, 'AddNewProject']);//Return Form To Pass Inputs
        Route::post('/AddNewProject_post', [AuthController::class, 'AddNewProject_post']);//Return data from Form
        Route::get('/DisplayProjects', [AuthController::class, 'DisplayProjects']);
        Route::post('/deleteProject/{id}', [AuthController::class, 'deleteProject']);
        Route::get('/updateProject/{id}', [AuthController::class, 'updateProject']);
        Route::post('UpdateProject_post/{id}', [AuthController::class, 'updateProject_post']);
        /**
         * 
         * End Project Section
         */   

          /**
           * 
           * Blogs Section
           */
        Route::get('/addBlogs', [AuthController::class, 'AddBlog']);
        Route::post('/addBlogs_post', [AuthController::class, 'AddBlog_post']);
        Route::get('/DisplayBlogs', [AuthController::class, 'DisplayBlogs']);
        Route::get('/updateBlog/{id}', [AuthController::class, 'updateBlog']);
        Route::post('/updateBlog_post/{id}', [AuthController::class, 'updateBlog_Post']);
        Route::post('/deleteBlog/{id}', [AuthController::class, 'DeleteBlog']);







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
