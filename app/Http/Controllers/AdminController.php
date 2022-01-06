<?php

/*
This Controller to control views in the admin-dashboard
*/

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {
        $users      = User::all();
        $exams      = Exam::all();
        $categories = Category::all();
        $results    = DB::table('exam_user')->get();
        return view("admin.index",compact('users','exams','categories','results'));
    }

}
