<!DOCTYPE html>
<html lang="en">

<head>
    <title>Melamed | Admin Panel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--butstrap 5 | CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- favicon -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/ico" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />


    <script>
    const BASE_URL = "{{url('')}}/"
    </script>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MelamedAnimations</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" target="blank" href="{{url('')}}">Sign out</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{url('user/logout')}}">Logout</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column"><br><br>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('cms/dashboard')}}">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/menu')}}">
                                <span data-feather="file"></span>
                                Menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/content')}}">
                                <span data-feather="file"></span>
                                Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/categories')}}">
                                <span data-feather="file"></span>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/products')}}">
                                <span data-feather="file"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cms/orders')}}">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li> -->
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li> -->
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                @yield('cms_content')
            </main>
        </div>
    </div>

    <!-- ajax \ jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--butstrap 5 | js only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>



    <!--
        my scripts -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#article'))
        .catch(error => {
            console.error(error);
        });
    </script>


</body>







</html>