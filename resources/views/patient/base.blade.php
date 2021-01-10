<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management @yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Hospital Management</a>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item"><a href="{{route('applyPatient')}}" class="nav-link">Apply patient to join doctors</a></li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-dark text-white" value="logout">
                    </form>  
                    @endauth
                    @guest
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
            @endguest
                   
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>