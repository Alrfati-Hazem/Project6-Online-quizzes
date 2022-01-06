<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function userFilter(Request $request) {
        if($request->role == "user" || $request->role == "admin") {
             $users = User::where('role_type',$request->role)->get();
             return view("admin.user.manage_user",compact("users"));
        }
        else {
            $users = User::all();
            return view("admin.user.manage_user",compact("users"));
        }
    }
}
