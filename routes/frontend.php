<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
	
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

		// Same thing for static pages like your about page
	Route::view(trans('routes.about'), 'about')->name('page.about');
	
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');

    Route::group(['middleware' => ['auth']], function () {

        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get("profile/{id}", ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::get("profile/changePassword/{username}", ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch("profile/changePassword/{username}", ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::delete('users/userProviderDestroy', ['as' => 'users.userProviderDestroy', 'uses' => 'UserController@userProviderDestroy']);
    });
});
