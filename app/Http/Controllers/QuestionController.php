<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::with("exam")->orderBy('exam_id')->get();
        return view("admin.question.manage_question",compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exams = Exam::all();
        return view("admin.question.add_question",compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        if($request->validated() == []) {
            return redirect()->route("manage-question.index");
        }
        else {
            $validated = $request->validated();
            $question  = new Question();
            $question::create($validated);
            return redirect()->route("manage-question.index")->with("message","Question has been added");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $exams    = Exam::all();
        return view("admin.question.edit_question",compact('question','exams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, Question $manage_question)
    {
        $validated = $request->validated();
        $manage_question->update($validated);
        return redirect()->route("manage-question.index")->with("message","Question has been modified");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $manage_question)
    {
        $manage_question->delete();
        return redirect()->route("manage-question.index")->with("message","Question has been deleted");
    }
}
