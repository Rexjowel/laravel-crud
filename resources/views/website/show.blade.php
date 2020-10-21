@extends('website.main.master')

@section('title','Show Student Data')

@section('body')

<div class="jumbotron bg-info text-center">
    <h3 class="bg-warning p-2">Welcome to My Detail</h3>
    <img src="{{ url('upload/',$student->image)}}" alt="">

    <h2>My ID is : {{$student->id}}</h2>
    <h2>My Name is : {{$student->name}}</h2>
    <h2>My Email is : {{$student->email}}</h2>
    <h2>My Address is : {{$student->address}}</h2>
</div>
    
@endsection
    
