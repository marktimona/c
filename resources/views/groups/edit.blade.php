@extends('layouts.dashboardApp')
@section('title')
Edit user details
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Update Group Details') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{url('/group-update', [$group->id])}}">
                    <input type="hidden" name="_method" value="PUT">
                       {{ method_field('PUT') }}
                        {{ csrf_field() }}
                     
                        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>
                       
        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name:') }}</label>

            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{$group->group_name}}"  name="group_name" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('No of Members:') }}</label>

            <div class="col-md-6">
                <input id="surname" type="number" min="1" max="1000" class="form-control @error('surname') is-invalid @enderror" value="{{$group->no_of_members}}"  name="no_of_members" required autocomplete="name" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Group Leader:') }}</label>

            <div class="col-md-6">
                <input id="other_names" type="text" class="form-control @error('surname') is-invalid @enderror"  value="{{$group->group_leader}}" name="group_leader" required autocomplete="name" autofocus>

                @error('other_names')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Group Leader Phone No:') }}</label>

            <div class="col-md-6">
            
            <input id="phone_no"  type="tel" pattern="^\d{10}$" required class="form-control @error('phone_no') is-invalid @enderror" value="{{$group->group_leader_phone_no}}" name="group_leader_phone_no" required autocomplete="name" autofocus>

                @error('phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button   style="color:black" type="submit" class="btn btn-primary">
                                    {{ __('Update Group') }}
                                </button>


                            </div>
    </form>
</div>

                           


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                            
                        </div>
                    @endif

   
  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
