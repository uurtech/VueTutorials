<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('skills',function(){
    return ['Laravel','Vue','Javascript', 'Tooling'];
});