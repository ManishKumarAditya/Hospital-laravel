@extends('homepage.base')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <h3 class="bg-secondary text-warning text-center">Your Profile</h3>
                    <img src="{{asset('images/'.$doctors->dp)}}" alt="" class="card-img-top rounded-circle card-img-top p-3" width="200px" height="380px">
                    <div class="card-body bg-light">
                        <table class="table-bordered table">
                           
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
                <div class="container  p-4 bg-info text-dark"style="background-image: url('images/dr.jpg');" >
                    <h2 class=" display-4 text-white">Welcome to my Hospital Managment</h2>
                    <p class="lead text-white">One-Stop Paperless Solution To Manage Your Medical Practice. Integrated OPD/IPD Module. Award Winning Software. Integrated Pharmacy & Lab. NABH Compliant Software. Patient Portal Web & Apps. 25000 Doctors Using Daily.</p>
                </div>
                <br>
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
                    @foreach ($doctor->getPatients as $item)
                        <tr>
                        
                            <td>{{$item->id}}</td>
                            <td>{{$item->getUser->name}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->getUser->email}}</td>
                            <td>{{$item->disease}}</td>
                            <td>{{$item->address}}</td>
                            
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection