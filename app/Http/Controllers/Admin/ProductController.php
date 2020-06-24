<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        //
        $products = Product::orderBy('created_by', 'desc')->where('isdelete',false)->get();
        if ($request->searchname) {
            $products = Product::orderBy('created_at', 'desc')->where('isdelete',false)->where('name','like','%'.$request->searchname.'%')->get(); 
        } 
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::where('isdelete',false)->pluck('name','id')->toArray();
        $category = Category::where('isdelete',false)->pluck('name','id')->toArray();
        return view('admin.product.create',compact('brand','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();
        $nameimage=$request->image->getClientOriginalName();
        $request->image->move('images', $nameimage); 
        $product = new Product([
            'product_code' => $request->product_code,
            'name' => $request->name,
            'slug' => $request->slug ? $request->slug : $request->name,
            'description' =>$request->description,
            'image' =>$nameimage,
            'promotion' =>$request->promotion,
            'quantity' =>$request->quantity,
            'category_id' =>$request->category_id,
            'brand_id' =>$request->brand_id,
            'isdelete' =>false,
            'isdisplay' =>false,
        ]);
        $product->save();
        if ($product){
            return redirect('/admin/product')->with('message','Create successfully!');
        }else{
            return back()->with('err','Save error!');
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
        $product = Product::findOrfail($id);
        return view('admin.product.detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $product = Product::findOrfail($id);
        $brand = Brand::where('isdelete',false)->pluck('name','id')->toArray();
        $category = Category::where('isdelete',false)->pluck('name','id')->toArray();
        return view('admin.product.edit',compact('brand','category','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    { 
        
        if($request->hasFile('image')){
            $imagename=$request->image->getClientOriginalName();
            $request->image->move('images', $imagename);
        }else{
            $imagename = $request->image;
        }
        $product = Product::findOrfail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->image = $imagename;
        $product->slug = $product->slug ? $product->slug : $product->name;
        $product->promotion = $request->promotion;
        $product->quantity = $request->quantity;
        $product->update();
        return redirect('admin/product')->with('message','Edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    { 
        $product = Product::findOrFail($id);
        if ($product->brand()->first()) {
            $product->delete();
            return back()->with('message','Delete success!');
        } else {
            return back()->with('err','Delete failse!');
        }
    }
}
