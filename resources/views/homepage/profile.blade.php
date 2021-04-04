@extends('homepage.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                   <div class="card-header card-align-center"
                    style=" background-image: linear-gradient(180deg, rgb(86, 229, 240), rgba(134, 120, 98, 0.664))">
                    <div class="row">
                        <div class="col-lg-8 ml-5">
                            <img src="{{asset('images/'. $doctors->dp)}}" alt="" width="60px" height="280px"
                                class="rounded-circle mx-auto d-block card-img-top p-4">
                        </div>
                        <div class="col-lg-3">
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="" class="btn btn-outline-dark">Profile</a>
                        </div>
                    </div>
                </div>
                    <div class="card-body bg-scondary" >
                        <table class="table table-hover">
                            <tr>
                                <th>Name:-</th>
                                <td>{{$doctors->getUSer->name}}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>{{$doctors->contact}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$doctors->getUser->email}}</td>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <td>{{$doctors->experience}}</td>
                            </tr>
                            <tr>
                                <th>Treatment</th>
                                <td>{{$doctors->treatment}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$doctors->address}}</td>
                            </tr>
                        </table>
                        <a href="" class="btn btn-dark text-white ms-right">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h3 class="text-center p-4 text-white"  style="background-color: rgb(8, 158, 151)">Patients Details</h3>
                <table class="table table-boderded table-hover ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Disease</th>
                        <th>Address</th>
                        <th>status</th>
                        <th>Date/Time</th>
                        
                    </tr>
                    @foreach ($doctor->getPatients as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->getUser->name}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->getUser->email}}</td>
                            <td>{{$item->disease}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Give Report</a>
                            </td>
                          
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection