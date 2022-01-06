<?php

/*
This Controller for Category-CRUD
*/

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        return view("admin.category.manage_category",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.add_category");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
          if($request->validated() == []) {
                return redirect()->route("manage-category.index");
            }
            else {
                $validated = $request->validated();
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("category_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']="category.png";
                }
                $category = new Category();
                $category::create($validated);
                return redirect()->route("manage-category.index")->with("message","Category has been added");
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
        $category = Category::findOrFail($id);
        return view("admin.category.edit_category",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $manage_category)
    {
        if($request->validated() == []) {
                return redirect()->route("manage-category.index");
            }
            else {
                $validated = $request->validated();
                if(array_key_exists("image",$validated)) {
                    $newImageName = time() . "-" . $request->image->getClientOriginalName();
                    $request->image->move(public_path("category_images"),$newImageName);
                    $validated['image']=$newImageName;
                }
                else{
                    $validated['image']= $manage_category->image;
                }
                $manage_category->update($validated);
                return redirect()->route("manage-category.index")->with("message","Category has been modified");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $manage_category)
    {
        $manage_category->delete();
        return redirect()->route("manage-category.index")->with("message","Category has been deleted");
    }
}
