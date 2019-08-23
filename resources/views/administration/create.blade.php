@extends('layouts.dashboardApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Register New Administrative Structure') }}</b></div>

<div class="card-body">
    <form method="POST" action="/new-admin">
        @csrf

        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>



        <div class="form-group row">
            <label   style="color:black" for="county" class="col-md-4 col-form-label text-md-right">{{ __('County:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Constituency:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('constituency') is-invalid @enderror" name="constituency" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                @error('constituency')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Location:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
                <input id="location" type="text" class="form-control @error('surname') is-invalid @enderror" name="location" value="{{ old('other_names') }}" required autocomplete="name" autofocus>

                @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Sub location:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
            
            <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="sub_location" value="{{ old('phone_no') }}" required autocomplete="name" autofocus>

                @error('sub_location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Chief:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
            
            <input id="nature of business" type="text" class="form-control @error('nature_of_business') is-invalid @enderror" name="name_of_chief" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                @error('name_of_chief')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone No of Chief:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
            
            <input id="chief_phone_no"  type="tel" pattern="^\d{10}$" required class="form-control @error('nature_of_business') is-invalid @enderror" name="chief_phone_no" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                @error('name_of_chief')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>






        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Sub Chief:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
            
            <input id="nature of business" type="text" class="form-control @error('nature_of_business') is-invalid @enderror" name="name_of_subchief" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                @error('name_of_chief')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>







        <div class="form-group row">
            <label   style="color:black" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone No of Sub Chief:') }}</label><h4 style="color:red">*</h4>

            <div class="col-md-6">
            
            <input id="chief_phone_no"  type="tel" pattern="^\d{10}$" required  class="form-control @error('nature_of_business') is-invalid @enderror" name="subchief_phone_no" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                @error('name_of_chief')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button   style="color:black" type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
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
