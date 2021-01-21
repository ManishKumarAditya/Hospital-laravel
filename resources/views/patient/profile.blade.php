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
                                <td>{{$patients->getUser->name}}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>{{$patients->contact}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$patients->getUser->email}}</td>
                            </tr>
                            <tr>
                                <th>Disease</th>
                                <td>{{$patients->disease}}</td>
                            </tr>
                          
                        </table>
                    </div>
                </div>
            </div>
         <div class="col-lg-8 p-4 text-white bg-secondary">
            <h2 class="display-2">Welcome to my Hospital Management</h2>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut perferendis facere itaque consectetur! Tenetur nam cupiditate, esse in ipsa adipisci praesentium illum hic nemo exercitationem, dignissimos autem sequi animi illo.</p>
         </div>
        </div>
    </div>
@endsection