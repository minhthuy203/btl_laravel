<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $category = $category->search()->get();
        return view('admin.category.show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request, Category $category)
    {
        // dd($request);
        $form_data = $request->only('name','status');
        $category->create($form_data);
        return redirect()->route('category.index')->with('yes','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // dd($category->id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $req, Category $category)
    {
        $form_data = $req->only('name', 'status');
        $category = $category->update($form_data);
        return redirect()->route('category.index')->with('yes', 'cật nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Product $product)
    {
        $product = $product->count();
        try {
            // dd($category);
            $category=$category->delete();
            return redirect()->back()->with('yes', 'đã chuyển vào thùng giác');

        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    public function Trashed(Category $category)
    {
        $category = $category->onlyTrashed()->get();
        return view('admin.category.trashed', compact('category'));
    }
    public function restore ($id)
    {
        try {
        $category = Category::where('id', $id)->withTrashed();
            // dd($category);
            $category->restore();
        return redirect()->route('category.index')->with('yes','khôi phục thành công');
        
    } catch (\Throwable $th) {
        return redirect()->back()->with('yes','khôi phục không thành công');
    }
    }
}
