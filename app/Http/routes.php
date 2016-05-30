<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//beginner 1
/*
Route::get('/', function () {
    $tasks = \App\Task::orderBy('created_at', 'asc')->get();
    return view('tasks', compact('tasks'));
//    return view('welcome');
});

Route::post('/task', function(Request $request){
    $validator = Validator::make($request->all(), [
        'name'=>'required|max:255'
    ]);
    if($validator->fails()){
        return redirect('/')->withInput()->withErrors($validator);
    }

    //create a new task
    $task = new \App\Task();
//    $task->name = $request->get('name');
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

Route::delete('task/{$id}', function($id){
    \App\Task::findOrFail($id)->delete();
    return redirect('/');
});*/

//beginner 2
//定义认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//定义注册路由
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//tasks get/post/delete
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');