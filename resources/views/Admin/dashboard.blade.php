@extends('Admin.adminbase')
@section('title')
this is|Dashboard
@endsection
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action bg-primary p-3 text-white">Dashboard</a>
                <a href="{{route('doctors')}}" class="list-group-item p-3 list-group-item-action">Doctors</a>
                <a href="{{route('patients')}}" class="list-group-item p-3 list-group-item-action">Patient</a>
                <form action="{{route('logout')}}" method="POST">
                    <input type="submit" class="list-group-item list-group-item-action p-3 text-white " style="background-color: rgb(78, 134, 138)" value="logout">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <h3 class="text-center p-4 text-white"  style="background-color: rgb(8, 158, 151)">All Deatils of Hospital </h3>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="">Total Doctors:--</h3>
                            <hr>
                            <h4 class="">{{$doctors}}</h4> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body bg-info">
                            <h3 class="">All Patients:-</h3>
                            <hr>
                            <h4 class="">{{$patients}}</h4> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection