
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else

                        @if(!Auth::guest() && Auth::user()->group_id ==1 )
                        <!--Trusted Sites Management-->
                        <a id="navbarDropdown" class="nav-link " href="Site" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                        Trusted Sites <span class="caret"></span>
                                </a>

                        <!--Transactions Management-->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                               Transactions <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transfer_show">new Transaction</a>
                                <a class="dropdown-item" href="listTransactions">View Transactions</a>
                            </div>
                        </li>
                        <!-- User Mangement -->
                        <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                     Customer Management  <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="position:absolute;left:850px;width:200px"aria-labelledby="navbarDrodpdown">
                                    <a id="navbarDropdown" class="nav-link " href="adduserform" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    New Account <span class="caret"></span>
                                    </a>
                                    <a id="navbarDropdown" class="nav-link " href="showusers" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    View Accounts<span class="caret"></span>
                                    </a>
                                    <a id="navbarDropdown" class="nav-link " href="updateuser" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    Update Accounts <span class="caret"></span>
                                    </a>

                                </div>
                            </li>
                                <a id="navbarDropdown" class="nav-link " href="feedback" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                  Feedback <span class="caret"></span>
                                </a>
                            @endif
                            @if(!Auth::guest() && Auth::user()->group_id !=1 )
                            <a id="navbarDropdown" class="nav-link " href="Check_sites" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                              Check web sites <span class="caret"></span>
                            </a>
                            @endif
                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname ." " . Auth::user()->lname }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href = "userfeedback">Feedback</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


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
