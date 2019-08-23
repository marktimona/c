<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header')


<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm row justify-content-center">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                 <div class="container-fluid ">
    
    <ul class="nav navbar-nav">


    <li><a   style="color:black" href="/dashboard"><b>Home</b></a>
              </li>


            

                       <li class="dropdown"><a   style="color:black" class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Members</b></a>
        <ul class="dropdown-menu">
          <li><a href="/member-create">Create</a></li>
          <li> <a href="/members-list">View List</a></li>
        </ul>
      </li>

      
      <li class="dropdown"><a    style="color:black"  class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Administration</b></a>
        <ul class="dropdown-menu">
          <li><a href="/admin-create">Create</a></li>
          <li><a href="/admins-list">View List</a></li>
         
        </ul>
      </li>


       
      <li class="dropdown"><a    style="color:black"  class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Groups</b></a>
        <ul class="dropdown-menu">
          <li><a href="/group-create">Create</a></li>
          <li><a href="/groups-list">View List</a></li>
         
        </ul>
      </li>

      
      <li class="dropdown"><a    style="color:black"  class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Users</b></a>
        <ul class="dropdown-menu">
          <li><a href="/user-create">Create</a></li>
          <li> <a href="/users-list">View List</a></li>
        </ul>
      </li>


               </ul>
  </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                       
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  style="font-size: 160%"  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a    style="color:black" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 logged in as: <b> {{ Auth::user()->name}} </b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a  style="color:black" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
