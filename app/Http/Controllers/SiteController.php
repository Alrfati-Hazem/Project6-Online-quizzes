<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

use function PHPUnit\Framework\returnSelf;
use Symfony\Component\Console\Input\Input;

class SiteController extends Controller
{
    public function index() {
        return view("site.index");
    }
    public function contact() {
        return view("site.contact");
    }
    public function category(){
        $categories    = Category::all();
        return view("site.category",compact("categories"));
    }
    public function exam($categoryId){
        $category = Category::findorFail($categoryId);
        $exams    = $category->exams;
        return view("site.exam",compact("exams"));
    }
    public function quiz($examId){
        $exam      = Exam::findOrFail($examId);
        $questions = $exam->questions;
        $i = 0;
        return view("site.quize",compact('questions','i','exam'));
    }
    public function storeResult(Request $request,$examId) {
        $exam      = Exam::findOrFail($examId);
        $questions = $exam->questions;
        $answers   = array_values($request->all());
        $score     = 0;
        $correct   = 0;
        $wrong     = 0;
        $max       = 0;
        $i         = 0;
        foreach($questions as $question) {
            $i++;
            if($question->correct_answer == $answers[$i])
            {
                $score = $score+$question->point;
                $correct++;
            }
            else {
                $wrong++;
            }
            $max = $max + $question->point;
        }
        $exam->users()->attach([
            [
            'user_id'     => Auth::user()->id,
            'exam_id'     => $exam->id,
            'wrong'       => $wrong,
            'correct'     => $correct,
            'score'       => $score,
            'max'         => $max,
            'created_at'  => now()
            ]
        ]);
        session(['answers'=>$answers]);
        return redirect()->route("showResult",$examId);
    }

    public function showResult($id) {
        $exam = Exam::find($id);
        $result = $exam->users->last()->pivot;
        return view("site.result",compact('exam','result'));
    }

    public function review($id) {
        $exam = Exam::find($id);
        $i    = 0;
        return view("site.review",compact('exam','i'));
    }

    public function showAllExam() {
        $user = User::findOrFail(Auth::id());
        return view("site.profile",compact('user'));
    }
}
