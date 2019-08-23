@extends('layouts.dashboardApp')
@section('title')
Edit user details
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Update Member Details') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{url('/member-update', [$member->id])}}">
                    <input type="hidden" name="_method" value="PUT">
                       {{ method_field('PUT') }}
                        {{ csrf_field() }}
                     
                        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>
                   <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name:') }}</label>

            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"  value={{$member->first_name}} required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surname:') }}</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname"  value={{$member->surname}} required autocomplete="name" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Other names:') }}</label>

            <div class="col-md-6">
                <input id="other_names" type="text" class="form-control @error('surname') is-invalid @enderror"  value={{$member->other_names}}  name="other_names" value="{{ old('other_names') }}" required autocomplete="name" autofocus>

                @error('other_names')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number:') }}</label>

            <div class="col-md-6">
            
            <input id="phone_no" type="tel" pattern="^\d{10}$" required  class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value={{$member->phone_no}} required autocomplete="name" autofocus>

            @error('phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nature of business:') }}</label>

            <div class="col-md-6">
            
            <input id="nature of business" type="text" class="form-control @error('nature_of_business') is-invalid @enderror" name="nature_of_business" value={{$member->nature_of_business}} required autocomplete="name" autofocus>

                @error('nature_of_business')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender:') }}</label>

            <div class="col-md-6">
            <select name="gender">

       <option   style="color:black">Male</option>
        <option  style="color:black">Female</option>

</select>
                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Has business permit?:') }}</label>

            <div class="col-md-6">
            <select name="has_business_permit">

       <option   style="color:black">No</option>
        <option  style="color:black">Yes</option>

</select>
                @error('has_business_permit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
   


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button   style="color:black" type="submit" class="btn btn-primary">
                                    {{ __('Update Member ') }}
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
