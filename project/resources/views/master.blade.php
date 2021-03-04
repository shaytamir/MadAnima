<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--butstrap 5 | CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--butstrap 5 | js only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

    <!-- ajax \ jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
    <!-- favicon -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/ico" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />

    <script>
    const BASE_URL = "{{url('')}}/"
    </script>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{url('')}}">MelamedAnimation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" style="justify-content: space-between;" id="navbarNav">
                    <ul class="navbar-nav">
                        @foreach($menu as $item)
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url($item['url'])}}">{{ $item['link'] }}</a>
                        </li>

                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('shop')}}">shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active cart_div" aria-current="page" href="{{url('shop/checkout')}}">
                                @if( !Cart::isEmpty() )
                                <div class="total_cart">{{Cart::getTotalQuantity()}}</div>
                                @endif
                                <img src="{{ asset('images/icons/grocery-cart-small.png') }}" alt="grocery-cart">
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        @if( !Session::has('user_id') )
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('user/signin')}}">Sign
                                in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('user/signup')}}">Sign
                                up</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/profile')}}">{{Session::get('user_name')}}</a>
                        </li>

                        @if(Session::has('is_admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/dashboard')}}">CMS</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/logout')}}">Logout</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <main>
        <div class="container">
            <!-- show message -->
            @if( Session::has('sm'))
            <div class="row sm-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ Session::get('sm') }}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- error logic -->
            @if($errors->any())
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @yield('main_content')
        </div>
    </main>
    <br>
    <br>
    <br>
    <footer>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Melamed &copy; {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/main.js')}}"></script>

</body>





</html>