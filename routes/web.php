<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
Route::get('/', function () {
    $questions = QuestionResource::collection(
        Question::with('user')->latest()->paginate(15)
    );
    //return $questions;
    return inertia('Questions/index',array(
        'questions'=> $questions
    ));
})->name('questions.index');

Route::get('/questions/{id}', function ($id){
    return inertia('Questions/show',[
        'question' => ['id'=>$id, 'title'=>'Question '.$id]
    ]);
})->name('questions.show');
