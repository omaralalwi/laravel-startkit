<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/

Route::name('frontend.')->group(function () {

    // Same thing for static pages like your about page
    Route::view(trans('routes.about'), 'about')->name('page.about');

    Route::get('/', [Frontend\FrontendController::class, 'index'])->name('index');
    Route::get('home', [Frontend\FrontendController::class, 'index'])->name('home');
    Route::get('privacy', [Frontend\FrontendController::class, 'privacy'])->name('privacy');
    Route::get('terms', [Frontend\FrontendController::class, 'terms'])->name('terms');

    Route::middleware('auth')->group(function () {

        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */

        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/{id}', ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::get('profile/changePassword/{username}', ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch('profile/changePassword/{username}', ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::delete('users/userProviderDestroy', [Frontend\UserController::class, 'userProviderDestroy'])->name('users.userProviderDestroy');
    });
});
