@extends('Admin.adminbase')
@section('title')
this is|Dashboard
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action p-3 bg-dark text-white">Dashboard</a>
                <a href="{{route('doctors')}}" class="list-group-item  p-3 list-group-item-action">Doctors</a>
                <a href="{{route('patients')}}" class="list-group-item p-3 list-group-item-action">Patient</a>
                <form action="{{route('logout')}}" method="POST">
                    <input type="submit" class="list-group-item p-3 list-group-item-action bg-secondary text-white" value="logout">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <table class="table table-bodered table-striped table-hover">
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
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->getUser->name}}</td>
                    <td>{{$doctor->contact}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->experience}}</td>
                    <td>{{$doctor->state}}</td>
                    <td>{{$doctor->country}}</td>
                    <td>{{$doctor->address}}</td>
                    <td>{{$doctor->specialist}}</td>
                    <td>{{$doctor->treatment}}</td>
                    <td>
                        {{-- <a href="" class="btn btn-success">{{$doctor->getUser->isDoctor}}</a> --}}
                        {{-- @if ($doctor->getUser->isDoctor == TRUE)
                        <span class="btn btn-dark">Approved</span>
                        @else
                        <span class="btn btn-success">Pending</span>
                        @endif --}}
                        <form action="{{route('editstatus',['u'=>$doctor->getUser->id])}}" method="POST">
                            @csrf
                            @method('put')
                            @if($doctor->getUser->isDoctor == false)
                            <input type="submit" class="btn btn-danger" name="send" value="pending">
                            @else
                            <a href="" class="btn btn-dark">Approved</a>   
                            @endif
                        </form>
                    </td>
                    <td>
                        <a href="{{route('drpatient')}}" class="btn btn-danger">No.Patients</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection