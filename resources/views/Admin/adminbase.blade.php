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
    <nav class="navbar  navbar-expand-lg navbar-dark bg-info">
        <a href="" class="navbar-brand">Hospital_Admin_Panel</a>
        <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @endguest
            @auth
            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-dark text-white" value="logout">
                </form>
            </li>
            @endauth
           
        </ul>
    </nav>
    @yield('content')
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>