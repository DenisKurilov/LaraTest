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

Route::get('/', function () {
    return view('welcome');
});



// test route
Route::any('/page1', function() {
    echo 'page1';
});



// route with params
Route::any('/post/{var?}/{id?}/{str?}', function( $var=null, $id=null, $str=null ) {

    echo 'post<br>var=['.$var.'] <br>id=['.$id.'] <br>str=['.$str.']';

    // str -> filter in service provider

})->where([ 'var' => '[A-Za-z]+', 'id' => '[0-9]+']);



// route with group
Route::group(['prefix' => 'admin'], function () {

    Route::get('page1', function () {
        echo 'admin/page1';
    });

    Route::get('page2', function () {
        echo 'admin/page2';
    });

});



// test names for route
Route::any('/test/{id?}', ['as'=>'tst', function($id=null) {
    echo 'id=['.$id.']';
}]);



Route::any('/testo', function() {
    echo route('tst', ['id'=>24]);
});



Route::any('/goto', function() {
    return redirect()->route('tst', ['id'=>1000]);
});



//test name 2
Route::any('/named', function() {
    echo 'its a named page<br>';
    $curRoute = Route::current();
    echo $curRoute->getName();
})->name('my-page');



Route::any('/goto2', function() {
    return redirect()->route('my-page');
});








// ----  controllers ------
// php artisan make:controller FirstController

Route::get('/article/{id?}','FirstController@show');

Route::get('/article-a/{id?}',['uses' => 'FirstController@testName', 'as' => 'test.name']);




// ----  middelware ------
// php artisan make:controller MyMiddleController
// php artisan make:middleware MyMiddleware
Route::get('/my-middle/show/{id?}',['uses'          => 'MyMiddleController@show',
                                    'as'            => 'my.middle.show',
                                    'middleware'    => 'my.middleware']);




