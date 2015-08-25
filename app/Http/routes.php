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

Route::get('/', function () {
    return view('welcome', [
        'page_id' => 'home',
        'people' => \App\Person::limit(14)->get(),
        'meetups' => \App\Meetup::limit(4)->orderBy('starts_on', 'desc')->get(),
    ]);
});

Route::get('meetups', function () {
    return view('meetups', [
        'page_id' => 'meetups',
        'meetup' => \App\Meetup::orderBy('starts_on', 'desc')->first(),
    ]);
});

Route::get('jobs', function () {
    return view('jobs', [
        'page_id' => 'jobs',
    ]);
});

Route::get('people', function () {
    return view('people', [
        'page_id' => 'people',
        'people' => \App\Person::limit(20)->get(),
    ]);
});

Route::get('forum', function () {
    return view('forum', [
        'page_id' => 'forum',
    ]);
});
