<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/style.css"/>

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top">
        <div class="container">
            <a href="" class="navbar-brand">SHEHON</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a> </li>
                <li><a href="" class="nav-link">All Course</a> </li>
                @if(Session::get('student_id'))
                    <li class="dropdown">
                        <a href="{{route('user-login')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{Session::get('student_name')}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('student-dashboard')}}" class="nav-link">Dashboard</a> </li>
                            <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                            <form action="{{route('student-logout')}}" method="POST" id="studentLogoutForm">
                                @csrf

                            </form>
                        </ul>
                    </li>
                @else
                <li><a href="{{route('user-login')}}" class="nav-link">Login</a> </li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a> </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('body')

    <footer class="pt-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>About Institute</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti dignissimos dolorem expedita facere, facilis, harum magnam minus nam nulla perspiciatis recusandae reprehenderit repudiandae, sunt totam unde voluptates. Distinctio, dolorum?</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Popular Link</h3>
                        <hr/>
                        <ul>
                            <li><a href="">Popular Course one</a> </li>
                            <li><a href="">Popular Course two</a> </li>
                            <li><a href="">Popular Course three</a> </li>
                            <li><a href="">Popular Course four</a> </li>
                            <li><a href="">Popular Course four</a> </li>
                            <li><a href="">Popular Course four</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow Us On</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i> </a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-whatsapp-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-tiktok"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitch"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-reddit"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-behance-square"></i></a> </li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram-plane"></i></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center">Copyright@2022. All right received by BASIS SEIP PWLFB-3</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
    <script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
