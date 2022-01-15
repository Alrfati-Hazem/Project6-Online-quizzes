<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function userFilter(Request $request) {
        if($request->role == "user" || $request->role == "admin") {
             $users          = User::where('role_type',$request->role)->get();
             $role_selected  = $request->role;
             $roles          = User::distinct('role_type')->get('role_type');
             return view("admin.user.manage_user",compact("users",'roles','role_selected'));
        }
        else {
            return redirect()->route("manage-user.index");
        }
    }
}
