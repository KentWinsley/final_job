<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/jobs', function () {

    return view('jobs', [
        'jobs' => Job::all()
    ]);

});

Route::get('/jobs/{id}', function ($id) {

    return view('job', [
        'job' => Job::findOrFail($id)
    ]);

});