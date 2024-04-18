<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Panel\AdController as Ad;
use App\Http\Controllers\Panel\DescriptionController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\PostController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Customer\ShowProfile;
use App\Livewire\Dashboard;
use App\Livewire\Dashboard\User as DashboardUser;
use App\Livewire\Panel\Ad\Create;
use App\Livewire\Panel\Ad\Edit;
use App\Livewire\Panel\Ads;
use App\Livewire\Panel\UserCreate;
use App\Livewire\Panel\UserPanel;
use App\Livewire\Panel\UserUpdate;
use App\Livewire\ShowPost;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Home::class, 'index'])->name('customer.home');

Route::prefix('panel')->group(function () {
    Route::get('/login', Login::class)->name('user.login');
    Route::get('/dashboard', Dashboard::class)->name('panel.home');
    Route::get('/users', UserPanel::class)->name('panel.home.users');

    //ads
    Route::get('/users/ads', Ads::class)->name('panel.users.ads');
    Route::get('/users/ads/create', Create::class)->name('panel.users.ads.create');
    Route::post('/users/ads/store', [Ad::class, 'store'])->name('panel.users.ads.store');
    Route::get('/users/ads/edit/{id}', Edit::class)->name('panel.users.ads.edit');
    Route::put('/users/ads/update/{ad}', [Ad::class, 'update'])->name('panel.users.ads.update');


    //users
    Route::get('/user/create', UserCreate::class)->name('panel.home.users.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('panel.home.users.store');
    Route::get('/user/edit/{id}', UserUpdate::class)->name('panel.home.users.edit');
    Route::put('/user/update/{user}', [UserController::class, 'update'])->name('panel.home.users.update');

    Route::prefix('description')->group(function () {
        Route::get('/', [DescriptionController::class, 'index'])->name('admin.content.description.index');
        Route::get('/create', [DescriptionController::class, 'create'])->name('admin.content.description.create');
        Route::post('/store', [DescriptionController::class, 'store'])->name('admin.content.description.store');
        Route::get('/edit/{menu}', [DescriptionController::class, 'edit'])->name('admin.content.description.edit');
        Route::put('/update/{menu}', [DescriptionController::class, 'update'])->name('admin.content.description.update');
        Route::delete('/destroy/{menu}', [DescriptionController::class, 'destroy'])->name('admin.content.description.destroy');
        Route::get('/status/{menu}', [DescriptionController::class, 'status'])->name('admin.content.description.status');
    });
});


Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{menu}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/update/{menu}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/destroy/{menu}', [PostController::class, 'destroy'])->name('post.destroy');
});
Route::get('/posts', ShowPost::class);
Route::get('/profile/{ad}', ShowProfile::class)->name('customer.profile-public');

//profile-public
Route::delete('/user/unfollow/{following}', [UserController::class, 'unFollow'])->name('profile.unfollow.user');

Route::get('/user/following/{following}', [UserController::class, 'following'])->name('profile.follow.user');


//login-Register
Route::get('/register', Register::class)->name('user.register');

// Route::post('/category/{id}', [CategoryController::class, 'delete'])->name('cat.delete');
// Route::get('/category', [CategoryController::class, 'index'])->name('cat.delete');

Route::get('/about', function () {
    return "hello world";
});
