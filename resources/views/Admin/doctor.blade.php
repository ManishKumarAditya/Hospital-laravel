@extends('Admin.adminbase')
@section('title')
this is|Dashboard
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="{{route('doctors')}}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="{{route('patients')}}" class="list-group-item list-group-item-action">Patient</a>
                <form action="{{route('logout')}}" method="POST">
                    <input type="submit" class="list-group-item list-group-item-action bg-secondary text-white" value="logout">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Conatct</th>
                    <th>Email</th>
                    <th>Experience</th>
                    <th>state</th>
                    <th>country</th>
                    <th>address</th>
                    <th>specialist</th>
                    <th>treatment</th>
                </tr>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->contact}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->experience}}</td>
                    <td>{{$doctor->state}}</td>
                    <td>{{$doctor->country}}</td>
                    <td>{{$doctor->address}}</td>
                    <td>{{$doctor->specialist}}</td>
                    <td>{{$doctor->treatment}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection