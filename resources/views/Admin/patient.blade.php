@extends('Admin.adminbase')
@section('title')
this is|Dashboard
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action bg-danger text-white">Dashboard</a>
                <a href="{{route('doctors')}}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="{{route('patients')}}" class="list-group-item list-group-item-action">Patient</a>
                <form action="{{route('logout')}}" method="POST">
                    <input type="submit" class="list-group-item list-group-item-action bg-secondary text-white ms-2" value="logout">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <h3 class="lead bg-primary p-3 text-center text-white">Patients details</h3>
            <table class="table table-boderded table-striped table-hover">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Conatct</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Disease</th>
                    <th>Action</th>
                
                </tr>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{$patient->id}}</td>
                    <td>{{$patient->getUser->name}}</td>
                    <td>{{$patient->contact}}</td>
                    <td>{{$patient->getUser->email}}</td>
                    <td>{{$patient->age}}</td>
                    <td>{{$patient->disease}}</td>
                  
                    <td>
                        <a href="" class="btn btn-dark text-white">Deatils</a>
                    </td>
                  
                </tr>
             
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection