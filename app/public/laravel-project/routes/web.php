<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

/*Route::get('/', function () {
    return view('welcome');
});*/

// better urls (old: /projects/1/tasks/2 - new: /projects/my-first-project/tasks/buy-milk)
Route::bind('task', function($value) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('project', function($value) {
	return App\Project::whereSlug($value)->first();
});


Route::resource('projects', 'ProjectsController');
// top level url
//Route::resource('tasks', 'TasksController');
// tasks belong to project (nested url)
Route::resource('projects.tasks', 'TasksController');
