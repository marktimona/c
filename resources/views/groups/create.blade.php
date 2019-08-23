@extends('layouts.dashboardApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

         

            <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Fill Group Details Below') }}</b></div>

          <div class="card-body">
          <form method="POST" action="new-group">
        @csrf

        <div class="form-group row justify-content-center">
        @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
        @endif
                   </div>



       
<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Group Name:</p>
    <input type="text" class="inputNew" style="color:black" name="group_name" value="{{ old('group_name') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('group_name')
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
    <p class="label-txt" style="color:black">No of Members:</p>
    <input type="number" min="1" max="1000" class="inputNew" style="color:black" name="no_of_members" value="{{ old('other_names') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('no_of_members')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>





<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Group Leader:</p>
    <input type="text" class="inputNew" style="color:black" name="group_leader" value="{{ old('group_leader') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('group_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>



























      

<div>
        <label class="labelNew col-md-12">
    <p class="label-txt" style="color:black">Group Leader Phone No:</p>
    <input id="phone_no"  type="tel" pattern="^\d{10}$" class="inputNew" style="color:black" name="group_leader_phone_no" value="{{ old('group_leader_phone_no') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>

    <div class="col-md-6">

                @error('group_leader_phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  </label>

</div>



<div >
      

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
                    {{ __('Add Group') }}
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
