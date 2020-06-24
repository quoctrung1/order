@extends('admin.layouts.main')
@section('title','Create Product')
@section('content')
<div class=" mt-3 card" >
    <div class="card-header">
        <h4> Create product</h4>
    </div>
    <div class="card-body">
    {{ Form::open(['url' => 'admin/product', 'method' => 'post','enctype '=>'multipart/form-data']) }} 
        <div class="form-group row">
            <div class="col-md-6">
                {{ Form::label('Product Code: ','',['class' => 'font-weight-bold']) }}
                {{ Form::text('product_code', uniqid(), ['class' => 'form-control' ]) }}
                <span class="text-danger">{{ $errors->first('product_code')}}</span>
            </div>
            <div class="col-md-6">
                {{ Form::label('Product name: ','',['class' => 'font-weight-bold']) }}
                {{ Form::text('name', null, ['class' => 'form-control' ]) }}
                <span class="text-danger">{{ $errors->first('name')}}</span>
            </div> 
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                {{Form::label('Brand :')}}
                {{Form::select('brand_id',$brand,null,['class' => 'form-control','placeholder'=>'Choose a brand'])}}
                @if ($errors->has('brand_id'))
                <div class="text-danger">{{ $errors->first('brand_id') }}</div>
                @endif
            </div>
            <div class="col-md-6">
                {{Form::label('Category :')}}
                {{Form::select('category_id',$category,null,['class' => 'form-control','placeholder'=>'Choose a category'])}}
                @if ($errors->has('category_id'))
                <div class="text-danger">{{ $errors->first('category_id') }}</div>
                @endif
            </div> 
        </div> 
        <div class="form-group row">
            <div class="col-md-6">
                {{ Form::label('Description: ','',['class' => 'font-weight-bold']) }}
                {{ Form::text('description', null, ['class' => 'form-control']) }}
                <span class="text-danger">{{ $errors->first('description')}}</span>
            </div>
             <div class="col-md-6">
                {{ Form::label('Quantity : ','',['class' => 'font-weight-bold']) }}
                {{ Form::text('quantity',0, ['class' => 'form-control' ]) }}
                <span class="text-danger">{{ $errors->first('quantity')}}</span>
            </div> 
             
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                {{ Form::label('Image : ','',['class' => 'font-weight-bold ']) }}
                {{ Form::file('image',null,['class' => 'form-control','id'=>'edsitor1']) }}
                <span class="text-danger">{{ $errors->first('image')}}</span>
            </div>
            <div class="col-md-6">
                {{ Form::label('Promotion(%) : ','',['class' => 'font-weight-bold']) }}
                {{ Form::text('promotion',0,['class' => 'form-control' ])}}
                <span class="text-danger">{{ $errors->first('promotion')}}</span>
            </div> 
           
        </div>
        {{ Form::submit('Save',['class' => 'btn btn-success mt-3 saveproduct']) }}
        <a class="btn btn-secondary mt-3" href="{{route('product.index')}}">Back</a>
    {{ Form::close() }} 
    </div> 
</div>
<p style="visibility: hidden;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
@endsection
@section('scriptAdmin')
@include('admin.shared.scriptAdmin')
@endsection
