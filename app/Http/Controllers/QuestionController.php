<?php

namespace App\Http\Controllers;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\AnswerResource;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter','latest');
        $questions = QuestionResource::collection(
            Question::with('user')
            ->when($filter=='mine', function($query){
                // scopeMine()
                $query->mine();
            })
            ->latest()
            ->paginate(15)
        );
        //return $questions;
        return inertia('Questions/index',array(
            'questions'=> $questions,
            'filter' => $filter
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        $request->user()->questions()->create(
            $request->validated()
        );

        return back()->with('success','Question created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $result = [
            'question'  => QuestionResource::make($question),
            'answers'    => AnswerResource::collection(
                $question->answers()->latest()->paginate(5)
            ),
        ];
        
        return inertia('Questions/show',$result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question->update($request->validated());

        return back()->with('success','Question updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return back()->with('success','Question deleted successfully.');
    }
}
