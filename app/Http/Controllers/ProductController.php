<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
       $product= $product->get();

        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
       $category= $category->get();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Product $product)
    {
        $request ->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            // 'sale_price' => 'numeric|lte:price',
            'upload' => 'required|mimes:jpg,png,jpeg,gif',
        ]);
        $form_data = $request->only('name', 'status','category_id','price','sale_price','content');
        $f_name = $request->upload->getClientOriginalName();
        // dd($request->upload);
        $request->upload->move(public_path('uploads'),$f_name);
        // dd($a);
        $form_data['image'] = $f_name;
        if($product->create($form_data)){
            return redirect()->route('product.index')->with('yes', 'thêm mới thành công');

        }
        return redirect()->back()->with('no', 'Thêm sản phẩm thất bại');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Category $category)
    {
        $category = $category->get();
        dd($category);
        return view('admin.product.edit', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $request ->validate([
            // 'name' => 'required',
            // 'category_id' => 'required',
            // 'price' => 'required|numeric',
            // 'sale_price' => 'numeric|lte:price',
            // 'upload' => 'mimes:jpg,png,jpeg,gif',
        // ]);

        $form_data = $request->only('name', 'status','category_id','price','sale_price','content');
        if($request->has('upload')){
            $f_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'),$f_name);
            $form_data['image'] = $f_name;
        }
        if ($product->update($form_data)) {
            return redirect()->route('product.index')->with('yes', 'cập nhật thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật thất bại');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}