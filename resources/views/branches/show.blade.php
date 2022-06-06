@extends('layout.main')
@section('main')




<div class="card detail">
    <span class="text-title">Detail Branch</span>
    <p> Name : {{$branch->name}}</p> 
    <p> City : {{$branch->city}}</p> 
    <p> State : {{$branch->state}}</p> 
    <p> Address : {{$branch->addres}}</p> 
    <p> Phone : {{$branch->phone}}</p> 
    <p> Status : {{$branch->status}}</p> 
</div>

@endsection()
