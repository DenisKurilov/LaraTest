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



Route::any('/page1', function() {
    echo 'page1';
});



Route::any('/post/{var?}/{id?}/{str?}', function( $var=null, $id=null, $str=null ) {

    echo 'post<br>var=['.$var.'] <br>id=['.$id.'] <br>str=['.$str.']';

    // str -> filter in service provider

})->where([ 'var' => '[A-Za-z]+', 'id' => '[0-9]+']);



Route::group(['prefix' => 'admin'], function () {

    Route::get('page1', function () {
        echo 'admin/page1';
    });

    Route::get('page2', function () {
        echo 'admin/page2';
    });

});




// test names

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


