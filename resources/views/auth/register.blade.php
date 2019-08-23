@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div   style="color:black" class="card-header"><b class="row justify-content-center">{{ __('Register') }}</b></div>

                <div class="card-body">
        <form class="formNew" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

  <label class="labelNew">
    <p class="label-txt">Name:</p>
    <input type="text" class="inputNew" name="name" value="{{ old('name') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label class="labelNew">
    <p class="label-txt">Email:</p>
    <input type="email" class="inputNew" value="{{ old('name') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label class="labelNew">
    <p class="label-txt">Password:</p>
    <input type="password" class="inputNew">
    <div class="line-box">
      <div class="line"></div>
    </div>
    <label class="labelNew">


    <label class="labelNew">
    <p class="label-txt">Confirm Password:</p>
    <input type="password" class="inputNew">
    <div class="line-box">
      <div class="line"></div>
    </div>
    <label class="labelNew">

  <button type="submit">Register</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
