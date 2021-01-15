@extends('homepage.base')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{asset('images/'.$doctors->dp)}}" alt="" class="card-img-top">
                    <div class="card-body bg-light">
                        <table class="table-bordered table">
                            <tr>
                                <th>Name</th>
                                <td>Dr.{{$doctors->name}}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>{{$doctors->contact}}</td>
                            </tr>
                          
                            <tr>
                                <th>Experience</th>
                                <td>{{$doctors->experience}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$doctors->email}}</td>
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
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="container  p-4 bg-light text-dark">
                    <h2 class="display-4">Welcome to my Hospital Managment</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi amet minus accusamus doloremque cupiditate! Minima amet, eos eaque voluptate sit dolorem soluta eius voluptatem neque sunt obcaecati. Optio, earum nisi.</p>
                </div>
                <h3 class="bg-secondary text-center text-white">Patients Details</h3>
                <table class="table table-boderded">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Disease</th>
                        <th>Address</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection