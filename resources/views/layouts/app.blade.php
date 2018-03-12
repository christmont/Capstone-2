<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ( 'Legal Service Management and Mobile Responsive Case Monitoring and Case Movement System') }}</title>

    <!-- Styles -->
     <script type= "text/javascript" src="{{asset('js/jquery-3.3.1.min.js') }}"></script> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{( 'Legal Service Management and Mobile Responsive Case Monitoring and Case Movement System') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                           
                        @else
                            <li class="dropdown">
                                 <a href="javascript:{}" class="nav-link logout" onclick="document.getElementById('logout').submit(); return false;">
                                        {{ ucwords(Auth::user()->efname) . '  ' . ucwords(Auth::user()->emname) . '  ' . ucwords(Auth::user()->elname) }}
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                                <ul class="dropdown-menu hold-on-click">
                              

                                <li class="divider"></li>
                                <li><!-- logout -->
                                     <form id="logout" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                    <a href="javascript:{}" class="nav-link logout" onclick="document.getElementById('logout').submit(); return false;">
                                        Logout
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                                    </form>
                                </li>
                            </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    
</body>
</html>
