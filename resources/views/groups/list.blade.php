@extends('layouts.dashboardApp')
@section('title')
Members
@endsection
@section('content')
<div class="container">
    <div class=" ">
        <div class="col-md-12">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('List of Groups') }}</b></div>

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
      <th scope="col">Group Name</th>
      <th scope="col">No of members</th>
      <th scope="col">Group Leader</th>
      <th scope="col">Group Leader Phone No</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>

  @forelse($groups as $i=> $group)
    <tr>
    <td>{{$i+1}}.</td>
        <td>{{$group->group_name}}</td>
        <td>{{$group->no_of_members}}</td>
        <td>{{$group->group_leader}}</td>
      <td>{{$group->group_leader_phone_no}}</td>

        <td> 
<form method="get" action="{{url('/delete-group', [$group->id])}}">
<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Delete"/>
   </form>
</td>

<td>  <form method="get" action="{{url('/group-edit', [$group->id])}}">
                                                                    

<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Edit"/>
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

                    <a href="/print-group">View PDF List</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
