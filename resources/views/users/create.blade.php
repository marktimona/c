@extends('layouts.dashboardApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Fill User Details Below') }}</b></div>

          <div class="card-body">
          <form method="POST" action="/user-post">
        @csrf

        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>



       


<div>
        <label class="labelNew col-md-12">
       
                        
                   <p class="label-txt" style="color:black">Name:</p>
    <input type="text" class="inputNew" style="color:black" name="name" value="{{ old('...required') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('surname')
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
  
<div >
      
    </div>

    <div class="col-md-6">
   
                @error('phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>

<div class="col-md-6 offset-md-4">
                <button   style="color:black" type="submit" class="btn btn-primary">
                    {{ __('Add User') }}
                </button>


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
