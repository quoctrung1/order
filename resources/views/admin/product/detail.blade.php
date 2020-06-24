@extends('admin.layouts.main')
@section('title','Product Detail')
@section('content')
<div class=" mt-3 card" >
  	<div class="card-header">
    	<h4>Product Detail</h4>
  	</div>
  	<div class="card-body row">
        <div class="col-md-12">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="h5 col-md-2">Product Code:</span> {{$product->product_code}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">Name:</span> {{$product->name}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">Image:</span> {{$product->image}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">'Promotion(%) :</span> {{$product->promotion}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">Quantity :</span> {{$product->quantity}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">Brand :</span> {{$product->brand->name}}</li>
                <li class="list-group-item"><span class="h5 col-md-2">Category :</span> {{$product->category->name}}</li>
            </ul>
        </div>
    </div> 
</div> 
<p style="visibility: hidden;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
@endsection
@section('scriptAdmin')
@include('admin.shared.scriptAdmin')
@endsection
