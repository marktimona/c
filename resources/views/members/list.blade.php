@extends('layouts.dashboardApp')
@section('title')
Members
@endsection
@section('content')
<div class="container">
    <div class=" ">
        <div class="col-md-12">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Registered Members') }}</b></div>

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
      <th scope="col">First Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Other names</th>      
      <th scope="col">Phone No</th>
      <th scope="col">Gender</th>
      <th scope="col">Nature of Business</th>
      <th scope="col">Has Business Permit</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @forelse($members as $i=> $member)
    <tr>
    <td>{{$i+1}}.</td>
        <td>{{$member->first_name}}</td>
        <td>{{$member->surname}}</td>
        <td>{{$member->other_names}}</td>
        <td>{{$member->phone_no}}</td>
        <td>{{$member->gender}}</td>
        <td>{{$member->nature_of_business}}</td>
        <td>{{$member->has_business_permit}}</td>

        <td> 
<form method="get" action="{{url('/delete-member', [$member->id])}}">
<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Delete"/>
   </form>
</td>

<td>  <form method="get" action="{{url('/member-edit', [$member->id])}}">

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
                    <a href="/print-member">View PDF List</a>

                </div>

            </div>








        </div>
    </div>
</div>
@endsection
