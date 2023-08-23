

<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" >
<nav class="navbar navbar-expand-lg">
   <div class="container-fluid">

    
     <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                   <li class="nav-item dropdown">
                            

                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> -->
                                <a class="dropdown-item" href="">Login as <b> {{ Auth::user()->name }} </b>
                                    </a>
                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                   <center> <a class="dropdown-item" href="{{ route('logoutku') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a></center>

                                    <form id="logout-form" action="{{ route('logoutku') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul></div></div>
</nav>
    
  </div>
  
</nav>
