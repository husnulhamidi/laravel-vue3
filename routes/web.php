<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Questions/index',array(
        'questions'=> [
            ['id'=>1, 'title'=> 'Questions 1'],
            ['id'=>2, 'title'=> 'Questions 2'],
        ]
    ));
})->name("questions.index");

Route::get('/questions/{id}', function ($id){
    return inertia('Questions/show',[
        'question' => ['id'=>$id, 'title'=>'Question test '.$id]
    ]);
})->('questions.show');
