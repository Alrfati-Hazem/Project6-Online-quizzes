<?php

/*
This Controller for User-CRUD
*/

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users          = User::all();
        $role_selected  = "All Users";
        $roles          = User::distinct('role_type')->get('role_type');
        return view("admin.user.manage_user",compact("users",'role_selected','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.user.add_user");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
            if($request->validated() == []) {
                return redirect()->route("manage-user.index");
            }
            else {
                $validated = $request->validated();
                $validated['password'] = Hash::make($request->password);
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("user_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']="user.JPG";
                }
                $user = new User();
                $user::create($validated);
                return redirect()->route("manage-user.index")->with("message","User has been added");
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
        $user = User::findOrFail($id);
        return view("admin.user.edit_user",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $manage_user)
    {
        if($request->validated() == []) {
                return redirect()->route("manage-user.index");
            }
            else {
                $validated = $request->validated();
                $validated['password'] = Hash::make($request->password);
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("user_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']=$manage_user->image;
                }
                $manage_user->update($validated);
                return redirect()->route("manage-user.index")->with("message","User has been modified");
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $manage_user)
    {
        $manage_user->delete();
        return redirect()->route("manage-user.index")->with("message","User has been deleted");
    }
}
