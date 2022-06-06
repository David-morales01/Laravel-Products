@extends('layout.main')
@section('main')
 

<div class="card detail">
    <span class="text-title">Detail Seller</span>
    <p> Name : {{$seller->name}}</p> 
    <p> Dni : {{$seller->dni}}</p> 
    <p> Phone : {{$seller->phone}}</p> 
    <p> Carnet : {{$seller->carnet}}</p>   
</div>

@endsection()
