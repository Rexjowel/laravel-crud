@extends('website.main.master')

@section('title','edit student')

@section('body')

<div class="container">

    <a href="{{ route('student.index')}}" class="btn btn-outline-warning btn-lg">+ Back to Student List</a>
        <br>
        {{-- error bag sms --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                      <li>{{$errors}}</li>  
                    @endforeach
                </ul>

            </div>
                
            @endif
        {{-- error end --}}

    <form action="{{ route('student.update',$student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
             <label for="">UsernName :</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter your Name" value="{{ $student->name }}">
        </div>

        <div class="form-group">
            <label for="">Email :</label>
            <input type="text" name="email" id="" class="form-control" placeholder="Enter your Email" value="{{ $student->email }}">
        </div>

        <div class="form-group">
            <label for="">Address :</label>
            <input type="text" name="address" id="" class="form-control" placeholder="Enter your address" value="{{ $student->address }}">
        </div>

        
        <input type="submit"  value="Submit Form" class="btn btn-info btn-lg">
        

    </form>

</div>


    
@endsection
    
