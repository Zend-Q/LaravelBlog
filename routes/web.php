<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Tag\CreateTagController;
use App\Http\Controllers\Admin\Tag\StoreTagController;
use App\Http\Controllers\Admin\Tag\ShowTagController;
use App\Http\Controllers\Admin\Tag\EditTagController;
use App\Http\Controllers\Admin\Tag\UpdateTagController;
use App\Http\Controllers\Admin\Tag\DeleteTagController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\CreatePostController;
use App\Http\Controllers\Admin\Post\StorePostController;
use App\Http\Controllers\Admin\Post\ShowPostController;
use App\Http\Controllers\Admin\Post\EditPostController;
use App\Http\Controllers\Admin\Post\UpdatePostController;
use App\Http\Controllers\Admin\Post\DeletePostController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\CreateUserController;
use App\Http\Controllers\Admin\User\StoreUserController;
use App\Http\Controllers\Admin\User\ShowUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\UpdateUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;


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





Route::name('Main')->group(function() {
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->middleware('auth', 'admin')->group(function (){
    Route::name('Main')->group(function() {
        Route::get('/', AdminController::class);
    });

    Route::prefix('posts')->group(function() {
        Route::name('post')->group(function() {
            Route::get('/', PostController::class);    
        });
        Route::name('admin.post.create')->group(function() {
            Route::get('/create', CreatePostController::class);   
        });
        Route::name('admin.post.store')->group(function() {
            Route::post('/', StorePostController::class);   
        });
        Route::name('admin.post.show')->group(function() {
            Route::get('/{post}', ShowPostController::class);   
        });
        Route::name('admin.post.edit')->group(function() {
            Route::get('/{post}/edit', EditPostController::class);   
        });
        Route::name('admin.post.update')->group(function() {
            Route::patch('/{post}', UpdatePostController::class);   
        });
        Route::name('admin.post.delete')->group(function() {
            Route::delete('/{post}', DeletePostController::class);   
        });    
    });

    Route::prefix('categories')->group(function() {
        Route::name('category')->group(function() {
            Route::get('/', CategoryController::class);    
        });
        Route::name('admin.category.create')->group(function() {
            Route::get('/create', CreateController::class);   
        });
        Route::name('admin.category.store')->group(function() {
            Route::post('/', StoreController::class);   
        });
        Route::name('admin.category.show')->group(function() {
            Route::get('/{category}', ShowController::class);   
        });
        Route::name('admin.category.edit')->group(function() {
            Route::get('/{category}/edit', EditController::class);   
        });
        Route::name('admin.category.update')->group(function() {
            Route::patch('/{category}', UpdateController::class);   
        });
        Route::name('admin.category.delete')->group(function() {
            Route::delete('/{category}', DeleteController::class);   
        });    
    });

    Route::prefix('tags')->group(function() {
        Route::name('tag')->group(function() {
            Route::get('/', TagController::class);    
        });
        Route::name('admin.tag.create')->group(function() {
            Route::get('/create', CreateTagController::class);   
        });
        Route::name('admin.tag.store')->group(function() {
            Route::post('/', StoreTagController::class);   
        });
        Route::name('admin.tag.show')->group(function() {
            Route::get('/{tag}', ShowTagController::class);   
        });
        Route::name('admin.tag.edit')->group(function() {
            Route::get('/{tag}/edit', EditTagController::class);   
        });
        Route::name('admin.tag.update')->group(function() {
            Route::patch('/{tag}', UpdateTagController::class);   
        });
        Route::name('admin.tag.delete')->group(function() {
            Route::delete('/{tag}', DeleteTagController::class);   
        });    
    });

    Route::prefix('users')->group(function() {
        Route::name('user')->group(function() {
            Route::get('/', UserController::class);    
        });
        Route::name('admin.user.create')->group(function() {
            Route::get('/create', CreateUserController::class);   
        });
        Route::name('admin.user.store')->group(function() {
            Route::post('/', StoreUserController::class);   
        });
        Route::name('admin.user.show')->group(function() {
            Route::get('/{user}', ShowUserController::class);   
        });
        Route::name('admin.user.edit')->group(function() {
            Route::get('/{user}/edit', EditUserController::class);   
        });
        Route::name('admin.user.update')->group(function() {
            Route::patch('/{user}', UpdateUserController::class);   
        });
        Route::name('admin.user.delete')->group(function() {
            Route::delete('/{user}', DeleteUserController::class);   
        });    
    });
});


Illuminate\Support\Facades\Auth::routes();



