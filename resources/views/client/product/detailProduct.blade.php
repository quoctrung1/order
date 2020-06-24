@extends('client.layouts.main')
@section('title','Detal Product')
@section('content')
<div class="container">
	<div class="row featurette py-5">
		<div class="col-md-5 order-md-1">
			<img class="featurette-image img-fluid mx-auto" src="{{asset('images/'.$product->image)}}" style="width: 400px; height: 400px;">
		</div>
		<div class="col-md-7 order-md-2">
			<form action="{{url('add-to-cart')}}" method="GET" onsubmit="return validate();">
				<h2 class="featurette-heading">{{$product->name}} </h2>
				<p class="h4"><span class="text-muted productprice">{{$product->product_detail->price}}</span>đ</p>
				<input type="hidden" name="productid" id="productid" value="{{$product->id}}">
				<div class="form-group">
					<select name="size" class="form-control col-md-3" id="size">
						<option value="" selected="selected">Select size!</option>
						@foreach($sizes as $key => $size)
						<option value="{{$size->size}}">{{strtoupper($size->size)}}</option>
						@endforeach
					</select>
					@foreach($sizes as $key => $size)
					<input type="hidden" id="price{{$size->size}}" value="{{$size->price}}">
					@endforeach
				</div>
				<div class="form-group">
					<button type="button" class="btn" onclick="document.getElementById('quantity').stepDown();">-</button>
					<input type="number" name="quantity" min="1" max="50" value="1" class="text-center"  id="quantity" style="border: 2px; height: 30px;">
					<button type="button" class="btn" onclick="document.getElementById('quantity').stepUp();">+</button> 
				</div>
				<button type="submit" class="btn btn-outline-danger col-md-3" id="addtocart"><h6 style="height: 20px;padding-top: 5px;">Add To Cart</h6></button>
				<h4 class="mt-4">Description:</h4>
				<p class="lead ">{!! $product->description !!}</p> 
			</form>
		</div>
	</div>
</div>
<script>
	$("#size").change(function(){
		size = $(this).val();
		$(".productprice").html($("#price"+size).val());
		if (size) {
			$("#addtocart").removeClass("disabled");
		}else{
			$("#addtocart").addClass("disabled");
		}
	});
	function validate() {
		size = $("#size").val();
		if (!size) {
			return false;
		}
	}
	$(document).ready(function(){ 
		if ($("#size").val() == '') {
			$("#addtocart").addClass("disabled");
		}
	}); 
</script>
@endsection
@section('scriptClient')
@include('client.shared.scriptClient')
@endsection
