<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('companyowner')->user();

    //dd($users);

    return view('companyowner.home');
})->name('home');

