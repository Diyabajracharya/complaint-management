<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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
//for home


//for signup
Route:: get('/signup', [PagesController::class, 'signup'])->name('signup');
Route::post('/signup',[PageController::class,'signupForm'])->name('signupForm');

Route::get('/',function() {
    return view('list');
});

//for login
Route:: get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login',[PagesController::class,'loginform']);

// for register
Route::post('/register', [PagesController::class, 'register_form']);
Route:: get('/register', [PagesController::class, 'register']);

Route::group(['middleware'=>'auth'],function () {
    //urls
});

Route::group(['middleware'=>'auth'],function () {
    Route:: get('/', [PagesController::class, 'dashboard']);
    Route:: get('/next', [PagesController::class, 'nextPage']);
    Route:: get('/create', [PagesController::class, 'create']);
    Route:: post('/create', [PagesController::class, 'store']);
    Route:: get('/profile/{id}/{second}', [PagesController::class, 'profile']);
    Route:: get('/list', [PagesController::class, 'list']);
    Route:: get('/edit/{id}', [PagesController::class, 'edit']);
    Route:: post('/edit', [PagesController::class, 'update']);
    Route:: post("/delete/{id}", [PagesController::class, 'delete']);
    Route:: post('/add', [PagesController::class, 'complaintStore']);
    Route:: get('/complaint_list', [PagesController::class, 'complaintList']);
    Route:: post('/complaint_list', [PagesController::class, 'complaintList']);


    //for product category
    Route:: get('/category/create', [ProductController::class, 'create']);
    Route:: post('/category/create', [ProductController::class, 'keep']);
   Route:: get('/category/list', [ProductController::class, 'list']);
    Route:: get('/category/edit/{id}', [ProductController::class, 'edit']);
    Route:: post('/category/edit', [ProductController::class, 'update']);
    Route:: get("/category/delete/{id}", [ProductController::class, 'delete']);
    Route:: post('/product/add', [ProductController::class, 'productStore']);
});

//for image

Route::get('/upload_image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);
















//Route:: get('/', [\App\Http\Controllers\PagesController::class, 'home']);
//    Route:: get('/profile', [\App\Http\Controllers\PagesController::class, 'profile']);
//    Route:: get('/create', [\App\Http\Controllers\PagesController::class, 'create']);
//    Route:: post('/create', [\App\Http\Controllers\PagesController::class, 'store']);
//    Route:: get('/list', [\App\Http\Controllers\PagesController::class, 'list']);
//    Route:: get('/edit/{id}', [\App\Http\Controllers\PagesController::class, 'edit']);
//    Route:: post('/edit/', [\App\Http\Controllers\PagesController::class, 'update']);
//    Route:: get('/delete/{id}', [\App\Http\Controllers\PagesController::class, 'delete']);
//    Route:: get('/register', [\App\Http\Controllers\PagesController::class, 'register_form']);
//    Route:: post('/register', [\App\Http\Controllers\PagesController::class, 'register']);
