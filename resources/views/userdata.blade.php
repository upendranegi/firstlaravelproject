@extends('includelayaout/layout');

@section('content')

<table class="table my-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">city</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">show data</th>
        <th scope="col">Update</th>
       
      </tr>
    </thead>
    <tbody>
      @php
           $i=1; 
      @endphp
    
        @foreach ($data as $id=>$user)
      <tr>
        <th scope="row">{{$i }}</th>
        <td>{{$user->name }}</td>
        <td>{{$user->email }}</td>
        <td>{{$user->age }}</td>
        <td>{{$user->city }}</td>
        <td>{{$user->created_at }}</td>
        <td>{{$user->updated_at }}</td>
        <td><a href="{{route('singleuser', $user->id)}}" class="btn btn-info">view</a></td>
        <td><a href="{{route('singleuser', $user->id)}}" class="btn btn-info">update</a></td>
      
      </tr>
      @php
      $i++
     @endphp
   @endforeach
    </tbody>
  </table>

  @endsection

  @section('title')
user data
@endsection