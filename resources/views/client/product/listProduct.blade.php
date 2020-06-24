@extends('client.layouts.main')
@section('title','Home Client')
@section('content')
<div class="container-fluid ">
	<div class="row">
		<div class="col-md-3 mt-4">
			<div class="card">
				<div class="card-header">
					Categories
				</div>
				<div class="card-body">
					<h6><a href="">Cafe</a></h6>
					<h6><a href="">Product</a></h6>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="py-4 bg-light">
				<div class="row">
					@foreach($products as $key => $product)
					<div class="col-md-3">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="{{asset('images/'.$product->image)}}" style="height: 225px; width: 100%; display: block;" >
							<div class="card-body">
								<h4 class=""><a href="{{route('product.show',$product->slug)}}" class="" style="color:black;text-decoration: none;">{{$product->name}}</a></h4>
								<div class="mb-2">
									<span>Promotion : $</span>
								</div> 
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="{{route('product.show',$product->slug)}}" class="btn btn-sm btn-outline-success">View</a> 
										<button type="button" class="btn btn-sm btn-outline-danger addcart" data-toggle="modal" data-target="#addtocart" value="{{$product->id}}">Add Cart</button> 
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scriptClient')
@include('client.shared.scriptClient')
@endsection
