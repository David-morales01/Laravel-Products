@extends('layout.main')
@section('main')




<div class="card detail">
    <span class="text-title">Detail Product</span>
    <p> Name : {{$product->name}}</p> 
    <p> Category : {{$product->categiry_id}}</p> 
    <p> Price : {{$product->price}}</p>  
    <p> Status : {{$product->status}}</p> 
</div>

@endsection()
