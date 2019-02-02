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
use App\User;


Route::get('/', function () {
	
    return view('welcome');
});
Route::post('ok','ExampleController@check');
Route::get('/vue','FirstController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('axios-example','FirstController@show');
Route::get('vue-magic','FirstController@vueMagic');
Route::get('vue-bind','FirstController@bind');
Route::get('edit-and-update','EditAndUpdateController@show');
Route::post('update-person-data','EditAndUpdateController@update');
Route::get('get-all-person-data','EditAndUpdateController@all');
Route::get('vue-component','VueComponentController@show');
Route::get('vue-component-detail','VueComponentController@showComponentDetailView');
Route::get('component-revised','VueComponentController@componentRevised');
Route::get('array','ArrayController@demo');
Route::get('vue-example','ExampleController@example');
Route::get('vue-example2','ExampleController@example2');
Route::get('vue-local-component','ExampleController@localComponent');
Route::get('bulma','ExampleController@bulma');
Route::get('load-modal','ExampleController@loadModal');
Route::get('custom-event','ExampleController@customEvent');
Route::get('child-communication','ExampleController@childCommunication');
Route::get('child-communication2','ExampleController@childCommunication2');
Route::get('slot-example','ExampleController@slot');
Route::get('inline-template','ExampleController@inlineTemplate');
Route::get('api-register','api\RegisterController@showRegisterBlade');
Route::get('api-login','api\RegisterController@showLoginView');
Route::middleware('auth')->group(function () {
    Route::get('userInfo', function (\Illuminate\Http\Request $request) {
        return $request->user()->bearerToken;
//        return $request->user();
    });
});

//eloquent polymorphic insertion and retrieve
Route::get('insert-post-comment','RelationController@insertPostComment');
Route::get('insert-video-comment', 'RelationController@insertVideoComment');
Route::get('show-post-comment', 'RelationController@showPostComment');
Route::get('show-video-comment', 'RelationController@showVideoComment');


//eloquent polymorphic insertion ended

// gate started
Route::get('show-dummy-view','GateController@showView');

Route::get('route-access','GateController@restrictRoute');

//gate ended

// Route::group(
// [
// 	'middleware'=>'auth',
// ],
// function(){
// 	//routes

// });
Route::get('job-example','DemoJobController@demo');

// relation database started

Route::get('insert-car','DatabaseRelationController@hasManyInsert');
Route::get('update-car','DatabaseRelationController@hasManyUpdate');
Route::get('delete-car','DatabaseRelationController@hasManyDelete');
Route::get('select-car','DatabaseRelationController@hasManySelect');

//relation database

    Route::get('view-example','ExampleViewController@loadView');
        Route::get('str', function () {
        $notice = "Hello i am safal";
        echo strstr($notice, 'am');
    });


Route::get('manipulate-arr', function () {
    $arr = ['1','2','3','4','5'];
    print_r(array_random($arr,2));
});
