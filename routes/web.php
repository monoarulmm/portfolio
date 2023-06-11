<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Pages\HomePage;
// use App\Http\Controllers\Pages\AdminPages;

use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$controller_path = 'App\Http\Controllers';









// profile

Route::get('/redirect', $controller_path . '\Pages\Profilecontroller@my_profile');
Route::get('/delete_profile/{id}', $controller_path . '\Pages\Profilecontroller@delete_profile');
Route::post('update_product_confirm/{id}', $controller_path . '\Pages\Profilecontroller@update_profile');





Route::group(['middleware' => ['role:admin']], function () {
    $controller_path = 'App\Http\Controllers';
    // Service
    Route::get('/service',$controller_path . '\Pages\ServiceController@index');
    Route::post('add_service',$controller_path . '\Pages\ServiceController@add_service');
    Route::get('/service_list',$controller_path . '\Pages\ServiceController@show_service');
    
    Route::get('/delete_service/{id}',$controller_path . '\Pages\ServiceController@delete_service');
    Route::get('/update_service/{id}',$controller_path . '\Pages\ServiceController@update_service');
    Route::post('/update_service_confirm/{id}',$controller_path . '\Pages\ServiceController@update_service_confirm');
   
    
    
           // testimonial
    Route::get('/testimonial',$controller_path . '\Pages\Admin\Testimonialcontroller@index');
    Route::post('/add_testimonial',$controller_path . '\Pages\Admin\Testimonialcontroller@add_testimonial');
    Route::get('/testimonial_list',$controller_path . '\Pages\Admin\Testimonialcontroller@show_testimonial');

    Route::get('/delete_testimonial/{id}',$controller_path . '\Pages\Admin\Testimonialcontroller@delete_testimonial');
    Route::get('/update_testimonial/{id}',$controller_path . '\Pages\Admin\Testimonialcontroller@update_testimonial');
    Route::post('/update_testimonial_confirm/{id}',$controller_path . '\Pages\Admin\Testimonialcontroller@update_testimonial_confirm');    
   
   
   // Admin with HeroSection
    Route::get('/hero', [HeroSectionController::class, 'create'])->name('hero');

    Route::get('/hero_show', [HeroSectionController::class, 'index'])->name('hero_show');
    Route::post('add_hero', [HeroSectionController::class,'store'])->name('form_store');
    Route::get('edit_hero/{id}', [HeroSectionController::class, 'edit'])->name('edit_hero');
    Route::patch('update_hero/{id}',  [HeroSectionController::class,'update'])->name('update_hero');
    Route::delete('destroy/{id}',   [HeroSectionController::class, 'destroy'])->name('destroy_hero');


    // Admin with AboutSection
    Route::get('/about_page', [AboutController::class, 'create'])->name('about');

    Route::get('/about_list', [AboutController::class, 'show'])->name('about_list');
    Route::post('add_about', [AboutController::class,'store'])->name('add_about');
    Route::get('edit_about/{id}', [AboutController::class, 'edit'])->name('edit_about');
    Route::patch('update_about/{id}',  [AboutController::class,'update'])->name('update_about');
    Route::delete('destroy_about/{id}',   [AboutController::class, 'destroy'])->name('destory_about');



    
// Admin with HomeSection
   Route::get('/home_page', [HomeController::class, 'create']);

   Route::get('/home_list', [HomeController::class, 'show'])->name('home_list');
   Route::post('add_home', [HomeController::class,'store'])->name('add_home');
   Route::get('edit_home/{id}', [HomeController::class, 'edit'])->name('edit_home');
   Route::patch('update_home/{id}',  [HomeController::class,'update'])->name('update_home');
   Route::delete('destroy_home/{id}', [HomeController::class, 'destroy'])->name('destory_home');
    
    
    // admin post

    Route::get('/post_list',$controller_path . '\Pages\Admin\PostController@show_post');
    Route::get('/accept_post/{id}',$controller_path . '\Pages\Admin\PostController@accept_post');
    Route::get('/reject_post/{id}',$controller_path . '\Pages\Admin\PostController@reject_post');
               
    
                   // blog
    Route::get('/blog_page',$controller_path . '\Pages\Admin\BlogController@blog_page');
    Route::post('/add_blog',$controller_path . '\Pages\Admin\BlogController@add_blog');
    Route::get('/blog_list',$controller_path . '\Pages\Admin\BlogController@show_blog');

    Route::get('/delete_blog/{id}',$controller_path . '\Pages\Admin\BlogController@delete_blog');
    Route::get('/update_blog_admin/{id}',$controller_path . '\Pages\Admin\BlogController@update_blog');
    Route::post('/update_blog_confirm/{id}',$controller_path . '\Pages\Admin\BlogController@update_blog_confirm');


    
    // work
    Route::get('/recentwork',$controller_path . '\Pages\Admin\RecentWorkController@index');
    Route::post('/add_recentwork',$controller_path . '\Pages\Admin\RecentWorkController@add_recentwork');
    Route::get('/recentwork_list',$controller_path .'\Pages\Admin\RecentWorkController@show_recentwork');
 
    Route::post('/show_recentwork',$controller_path . '\Pages\Admin\RecentWorkController@show');
 
    Route::get('/delete_recentwork/{id}' ,$controller_path .  '\Pages\Admin\RecentWorkController@delete_recentwork');
    Route::get('/update_recentwork/{id}' ,$controller_path .  '\Pages\Admin\RecentWorkController@update_recentwork');
    Route::post('/update_recentwork_confirm/{id}' ,$controller_path .  '\Pages\Admin\RecentWorkController@update_recentwork_confirm');
    
    // Admin _cetagory
    Route::get('/sector', $controller_path . '\Pages\Admin\sector@index');
    Route::post('/add_cetagory', $controller_path . '\Pages\Admin\sector@add_cetagory');
    Route::get('/cetagory_list', $controller_path . '\Pages\Admin\sector@cetagory_list');
    Route::get('/delete_cetagory/{id}', $controller_path . '\Pages\Admin\sector@delete_cetagory');
    Route::get('/update_cetagory_view/{id}', $controller_path . '\Pages\Admin\sector@update_cetagory_view');
    Route::post('/update_cetagory/{id}', $controller_path . '\Pages\Admin\sector@update_cetagory');
    
    
    // user&profile list
    Route::get('/user_list', $controller_path . '\Pages\HomePage@user_list');
    Route::get('/profile_list', $controller_path . '\Pages\HomePage@profile_list');
    
    
    // commentreplu_list_&delete 
    Route::get('/comment_list', $controller_path . '\Pages\HomePage@comment_list');
    Route::get('/reply_list', $controller_path . '\Pages\HomePage@reply_list');
    Route::get('/delete_comment/{id}',$controller_path . '\Pages\HomePage@delete_comment'); 
    Route::get('/delete_reply/{id}',$controller_path . '\Pages\HomePage@delete_reply'); 
    
    
    // classes
    Route::get('/class',$controller_path . '\Pages\Admin\ClassController@index');
    Route::post('/add_class',$controller_path . '\Pages\Admin\ClassController@add_classes');
    Route::get('/class_list',$controller_path . '\Pages\Admin\ClassController@show_classes');
    Route::get('/delete_class/{id}',$controller_path . '\Pages\Admin\ClassController@delete_classes');
    Route::get('/update_class/{id}',$controller_path . '\Pages\Admin\ClassController@update_classes');
    Route::post('/update_class_confirm/{id}',$controller_path . '\Pages\Admin\ClassController@update_classes_confirm');
 



  

});

// HOME CONTROLLER


Route::get('/', $controller_path . '\Pages\HomePage@index')->name('pages-home');
Route::get('/home', $controller_path . '\Pages\HomePage@index')->name('pages-home');  // ->middleware('auth','verified');

Route::get('/about', $controller_path . '\Pages\HomePage@about');
Route::get('/contact', $controller_path . '\Pages\Contactcontroller@index');
Route::get('/user/post', $controller_path . '\Pages\HomePage@post');
Route::get('/user/service', $controller_path . '\Pages\HomePage@service');
Route::get('/user/blog', $controller_path . '\Pages\HomePage@blog');
Route::get('/user/cetagory', $controller_path . '\Pages\HomePage@cetagory');
Route::get('/user/recentwork', $controller_path . '\Pages\HomePage@recentwork');
Route::get('/user/media', $controller_path . '\Pages\HomePage@media');
Route::get('/search', $controller_path . '\Pages\HomePage@search');
// comment
Route::post('/add_comment', $controller_path . '\Pages\HomePage@add_comment')->name('add_comment');
Route::post('/add_reply', $controller_path . '\Pages\HomePage@add_reply')->name('add_reply');




// Pages all
Route::get('/service_details/{id}',$controller_path . '\Pages\ServiceController@service_details');
Route::get('/blog_details/{id}',$controller_path . '\Pages\Admin\BlogController@blog_details');
Route::get('/recentwork_details/{id}' ,$controller_path .  '\Pages\Admin\RecentWorkController@recentwork_details');
Route::get('/cetagory_details/{id}', $controller_path . '\Pages\Admin\sector@cetagory_details');
Route::get('/client_details/{id}', $controller_path . '\Pages\HomePage@client_details');
Route::get('/post_details/{id}',$controller_path . '\Pages\PostController@post_details');



// All Class view & Search
Route::get('/class_all', $controller_path . '\Pages\Admin\ClassController@show');
Route::get('/service_search', $controller_path . '\Pages\Admin\ClassController@service_search');



// contact_form
Route::post('/send-message', $controller_path . '\Pages\Contactcontroller@sendEmail')->name('send.message');
Route::post('/contact-send', $controller_path . '\Pages\Cetagory_ContactController@sendEmail')->name('contact.send');
Route::post('/contact.send.project', $controller_path . '\Pages\Recentwork_ContactController@sendEmail')->name('contact.send.project');
















// post User

Route::post('/add_post',$controller_path . '\Pages\UserPostController@add_post');
Route::get('/post_details/{id}',$controller_path . '\Pages\UserPostController@post_details');
Route::get('/delete_post/{id}' ,$controller_path . '\Pages\UserPostController@delete_post');
Route::get('/update_post/{id}' ,$controller_path . '\Pages\UserPostController@update_post');
Route::post('/update_post_confirm/{id}' ,$controller_path . '\Pages\UserPostController@update_post_confirm');













Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




















