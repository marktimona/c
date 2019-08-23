@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card reg">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">Register as New User &nbsp; &nbsp; <b>or</b> &nbsp; &nbsp;<a href="{{ route('login') }}">Login</a></b></div>

          <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>



       
<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Name:</p>
    <input type="text" class="inputNew" style="color:black" name="name" value="{{ old('name') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>


<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Email Adress:</p>
    <input type="email" class="inputNew" style="color:black" name="email" value="{{ old('email') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('other_names')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>


<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Password:</p>
    <input type="password" class="inputNew" style="color:black" name="password" value="{{ old('password') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>
      

<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Confirm Password:</p>
    <input type="password" class="inputNew" style="color:black" value="{{ old('other_names') }}" 
    id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" >
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>





<div class="container-login100-form-btn">
						<button class="login100-form-btn">
        {{ __('Register') }}
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
