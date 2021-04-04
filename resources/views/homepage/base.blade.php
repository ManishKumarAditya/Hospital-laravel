<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management @yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar- dark p-2" style="background-color:rgb(1, 75, 158)">
        <ul class="navbar-nav ms-auto">
            <li class="text-white me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
              </svg> Contact US:-7050543175 |</li>
              <li class="text-warning me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
              </svg> Email:-manishk15800@gmail.com</li>
        </ul>
    
    </nav>
    <nav class="navbar  navbar-expand-lg navbar-dark" style="background-color: rgb(8, 158, 151)">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand text-white" style="font-family: 'Hachi Maru Pop', cursive;color:rgba(15, 39, 104, 0.432)"><img src="{{asset('logo.jpg')}}" alt=""  height="75px" width="80px">Hospital(Save & Secure)</a>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-dark me-2 text-white" value="logout">
                    </form>
                </li>
                <li class="nav-item"><a href="{{route('profile')}}" class="btn btn-outline-warning ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>My profile</a></li>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark  ms-2   dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a href="{{route('apply')}}" class="dropdown-item">Be my partner as a doctor</a></li>
                      <li><button class="dropdown-item" type="button">Details</button></li>
                    </ul>
                  </div>
                @endauth
                @guest
                <li class="nav-item"><a href="{{route('login')}}" class="btn btn-outline-warning me-2 fw-bold">Login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="btn btn-outline-dark me-2 fw-bold">Register</a></li>
       
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
