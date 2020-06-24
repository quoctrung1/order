<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\Interfaces\ProductDetailInterface;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $productRepo;
    private $productdetailRepo;
    //Goi ham khoi tao
    public function __construct(ProductInterface $productRepository,ProductDetailInterface $productdetailRepository)
    {
        $this->productRepo = $productRepository;
        $this->productdetailRepo = $productdetailRepository;
    }
    public function index()
    {
        $products = $this->productRepo->getAll(); 
        return view('client.home.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.product.detailProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = $this->productRepo->getBySlug($slug); 
        $sizes = $this->productdetailRepo->getByProductId($product->id);   
        return view('client.product.detailProduct',compact('product','sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getSize(Request $request)
    {
        $sizes = $this->productdetailRepo->getByProductId($request->product_id); 
        return response()->json(array('success'=> true, 'sizes' => $sizes));
    }
}
