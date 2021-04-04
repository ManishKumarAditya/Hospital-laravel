<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>           
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
               <li><a href="{{route('index')}}" class="btn btn-outline-dark ms-2">Home</a></li>
                @endauth
            </ul>
        </div>
    </nav>
            </ul>
        </div>
    </nav>
    @yield('content')
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>