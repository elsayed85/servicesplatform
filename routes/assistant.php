<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('assistant')->user();

    //dd($users);

    return view('assistant.home');
})->name('home');

