@extends('layouts.dashboardApp')
@section('title')
Users
@endsection
@section('content')
<div class="container">
    <div class=" ">
        <div class="col-md-12">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Registered Users') }}</b></div>
            <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>

<div class="card-body col-md-12">
<table class="table table-striped">
  <thead class="thead-dark">
    <tr class="table table-striped">
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>      
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @forelse($users as $i=> $user)
    <tr>
    <td>{{$i+1}}.</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>

        <td> 
<form method="get" action="{{url('/delete-user', [$user->id])}}">
<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Delete"/>
   </form>
</td>

<td>  <form method="get" action="{{url('/user-edit', [$user->id])}}">

<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Edit details"/>
   </form>

</td>
    </tr>
    @empty
    <p>No data</p>
    @endforelse
  </tbody>
</table>




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                            
                        </div>
                    @endif

                </div>
            <a href="/print-user">View PDF List</a>

            </div>
        </div>
    </div>
</div>
@endsection
