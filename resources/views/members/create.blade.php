@extends('layouts.dashboardApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Fill Member Details Below') }}</b></div>

          <div class="card-body">
    <form method="POST" action="new-member">
        @csrf

        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>



       
<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">First Name:</p>
    <input type="text" class="inputNew" style="color:black" name="first_name" value="{{ old('first_name') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>




<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Surname:</p>
    <input type="text" class="inputNew" style="color:black" name="surname" value="{{ old('first_name') }}" required>
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
    <p class="label-txt" style="color:black">Other Names:</p>
    <input type="text" class="inputNew" style="color:black" name="other_names" value="{{ old('other_names') }}" required>
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
    <p class="label-txt" style="color:black">Phone No:</p>
    <input type="tel" class="inputNew" pattern="^\d{10}$" style="color:black" name="phone_no" value="{{ old('0705236112') }}" required>
    <div class="line-box">
      <div class="line"></div>
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
      

<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Nature of Business:</p>
    <input type="text" class="inputNew" style="color:black" name="nature_of_business" value="{{ old('other_names') }}" required>
    <div class="line-box">
      <div class="line"></div>
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


<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Gender:</p><br>
      
      <select style="color:black" name="gender">

<option   style="color:black">Male</option>
 <option  style="color:black">Female</option>

</select>  
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




<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Has Business Permit?</p><br>
      
      <select style="color:black" name="has_business_permit">

<option   style="color:black">Yes</option>
 <option  style="color:black">No</option>

</select>  
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
                    {{ __('Add Member') }}
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
