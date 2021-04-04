@extends('Admin.adminbase')
@section('content')
<div class="col-lg-8 mx-auto mt-5">
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
        @foreach ($patients as $item)
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
@endsection