<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Translate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs = Translate::langs();
        // dd($langs);
        return view('categories.create', compact(['langs']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        // dd($data['title']);
        $title = Translate::create($data['title']);
        // dd($title);
        Category::create([
            'title_tr' => $title->id,
        ]);

        return redirect()->route('categories.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $langs = Translate::langs();

        return view('categories.edit', compact(['category', 'langs']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->title->update($data['title']);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
