@extends('layout.main')
@section('main')
 

<div class="card detail">
    <span class="text-title">Detail Category</span>
    <p> Name : {{$category->name}}</p> 
    <p> Slug : {{$category->slug}}</p> 
    <p> Status : {{$category->status}}</p>  
</div>

@endsection()
