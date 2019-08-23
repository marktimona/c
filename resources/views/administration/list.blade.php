@extends('layouts.dashboardApp')
@section('title')
Administration
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

            <div class="form-group" class="members">
@if(Session::has('message'))
<p class="alert alert-successs">{{Session::get('message')}}</p>
@endif
</div>
<div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('List of Administrative Structures') }}</b></div>


    <table class="table table-striped">
  <thead class="thead-dark">
    <tr class="table table-striped">
      <th scope="col">No</th>
      <th scope="col">County</th>
      <th scope="col">Constituency</th>
      <th scope="col">Location</th>
      <th scope="col">Sub location</th>
      <th scope="col">Name of Chief</th>
      <th scope="col">Chief's Phone No</th>
      <th scope="col">Name of Sub Chief</th>
      <th scope="col">Sub Chief's Phone No</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
     

    </tr>
  </thead>
  <tbody>

  @forelse($admins as $i=> $admin)
    <tr>
    <td>{{$i+1}}.</td>
        <td>{{$admin->county}}</td>
        <td>{{$admin->constituency}}</td>
        <td>{{$admin->location}}</td>
        <td>{{$admin->sub_location}}</td>
        <td>{{$admin->name_of_chief}}</td>
        <td>{{$admin->chief_phone_no}}</td>
        <td>{{$admin->name_of_subchief}}</td>

        <td>{{$admin->subchief_phone_no}}</td>
  
        <td> 
<form method="get" action="{{url('/delete-admin', [$admin->id])}}">
<input type="hidden" name="_method" value="Delete">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Delete"/>
   </form>
</td>

<td>  <form method="get" action="{{url('/admin-edit', [$admin->id])}}">

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

                    <a href="/print-admin">View PDF List</a>
   
  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
