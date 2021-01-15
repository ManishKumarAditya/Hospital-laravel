@extends('patient.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <table class="table-bordered table">
                            <tr>
                                <th>Name</th>
                                <td>{{$patients->name}}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>{{$patients->contact}}</td>
                            </tr>
                          
                            <tr>
                                <th>Disease</th>
                                <td>{{$patients->disease}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$patients->email}}</td>
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
            </div>
        </div>
    </div>
@endsection