@extends('homepage.base')
@section('title')
this is|homepage

@endsection
@section('content')
<div class="container-fluid p-5" style="background-image: url('images/dr.jpg');">
    <div class="container">
        <h1 class="display-3 text-white p-4">Welcome to my Hospital Management</h1>
        <p class="lead text-white">A hospital is a health care institution providing patient treatment with specialized medical and
            nursing staff and medical equipment.[1] The best-known
            type of hospital is the general hospital, which typically has an emergency department to treat urgent health
            problems ranging from fire and accident victims to a sudden illness. A district hospital typically is the
            major health care facility in its region, with many beds for intensive care and additional beds for patients
            who need long-term care</p>
        <a href="" class="btn btn-danger">Read More</a>
    </div>
</div>
<div class="container-fluid " >
    <h3 class="text-center bg-info p-3 mt-2 rounded-2">All Doctors are as Following:- </h3>
    <div class="row">
        @foreach ($data as $item)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-light">
                    <img src="{{asset('images/'. $item->dp)}}" alt="" width="100px" height="400px"
                        class="rounded-circle card-img-top p-3">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="text-danger">Specialist:-{{$item->specialist}}</h4>
                        <h4 class=" ">Dr.{{$item->getUser->name}}</h4>
                        <h4 class="lead">Exp Year:-{{$item->experience}}</h4>
                        <h4 class="lead">Treatment:-{{$item->treatment}}</h4>
                        @auth
                        <a href=" " class="btn btn-dark text-white btn-sm">View</a>
                        <a href=" " class="btn btn-success btn-sm">Fees:{{$item->fees}}/-</a>
                        <a href="{{route('applyPatient',['id'=>$item->id])}}" class="btn btn-success btn-sm">Book To Appointment</a>
                        <hr>
                        <div class="col-lg-4">
                        <h6 class="text-dark">Time:10AM-2PM</h6>
                    </div>
                        <div class="col-lg-4">
                        <h6 class="text-danger">Sunday Closed:</h6>
                    </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
