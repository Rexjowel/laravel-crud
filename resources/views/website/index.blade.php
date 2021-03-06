@extends('website.main.master')


@section('title','Student List')


@section('body')
   <div class="container">
       <div class="row mb-3">
           <div class="col-lg-6">
               <button class="btn btn-primary btn-lg">Student List</button>
           </div>

            <div class="col-lg-6 d-flex justify-content-lg-end align-items-center">
                <a href="{{ route('student.create')}}" class="btn btn-outline-light btn-lg">+ Add New Student</a>
            </div>
        </div>

        {{-- flash sms --}}

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif

        {{-- flash end --}}

            {{-- this is a table partion --}}
            <table class="table table-bordered text-white bg-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Show</th>
                        <th>Update</th>
                        <th>Remove</th>
                        
                    </tr>
                </thead>
                <tbody>
                   @foreach ($std as $student)
                   <tr>
                   <td>{{$student->id}}</td>
                   <td>
                       <img src="{{ url('upload/',$student->image)}}" alt="" id="indeximg" class="rounded-circle">
                   </td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->address}}</td>
                    {{-- show link --}}
                    <td>
                        <a href="{{ route('student.show',$student->id)}}" class="btn btn-primary">Show</a>
                    </td>
                    {{-- end --}}

                    {{-- edit link --}}
                    <td>
                        <a href="{{ route('student.edit',$student->id)}}" class="btn btn-success">Edit</a>
                    </td>

                    {{-- end edit --}}

                    {{-- for delet --}}
                    <td>
                    <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delet" class="btn btn-danger">
                    </form>
                    </td>
                    {{-- delet end --}}
                </tr>                       
                   @endforeach
                   
                </tbody>
            </table>
            {{-- End Table --}}

            <div class="d-flex justify-content-center align-items-center">
                <div>{{$std->links()}}</div>
            </div>

    </div> 
@endsection