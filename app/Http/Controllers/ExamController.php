<?php

/*
This Controller for Exam-CRUD
*/

namespace App\Http\Controllers;

use App\Http\Requests\ExamRequest;
use App\Models\Category;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams    = Exam::with("category")->orderBy('name')->get();
        return view("admin.exam.manage_exam",compact("exams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.exam.add_exam",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamRequest $request)
    {
         if($request->validated() == []) {
                return redirect()->route("manage-exam.index");
            }
            else {
                $validated = $request->validated();
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("exam_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']="exam.png";
                }
                    $exam = new Exam();
                    $exam::create($validated);
                return redirect()->route("manage-exam.index")->with("message","Exam has been added");
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
        $exam = Exam::findOrFail($id);
        $categories = Category::all();
        return view("admin.exam.edit_exam",compact('exam','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamRequest $request, Exam $manage_exam)
    {
         if($request->validated() == []) {
                return redirect()->route("manage-exam.index");
            }
            else {
                $validated = $request->validated();
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("exam_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']= $manage_exam->image;
                }
                $manage_exam->update($validated);
                return redirect()->route("manage-exam.index")->with("message","Exam has been modified");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $manage_exam)
    {
        $manage_exam->delete();
         return redirect()->route("manage-exam.index")->with("message","Exam has been deleted");
    }
}
