<?php

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

// Auth Routes
require __DIR__.'/auth.php';

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], 
    function(){ //start Frontend LOCALIZED Routes

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    
    // frontend Routes
    require __DIR__.'/frontend.php';

}); // colse Frontend LOCALIZED Routes

// Atom/ RSS Feed Routes 
 //   Route::feeds();

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect','localeViewPath'] 
    ], function(){ //start Backend LOCALIZED Routes

    // backend Routes
  require __DIR__.'/backend.php';

}); // colse Backend 
