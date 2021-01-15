@extends('homepage.base')
@section('title')
this is|homepage

@endsection
@section('content')
<div class="container-fluid bg-light p-5">
    <div class="container">
        <h1 class="display-2">Welcome to my Hospital Management</h1>
        <p class="lead">A hospital is a health care institution providing patient treatment with specialized medical and
            nursing staff and medical equipment.[1] The best-known
            type of hospital is the general hospital, which typically has an emergency department to treat urgent health
            problems ranging from fire and accident victims to a sudden illness. A district hospital typically is the
            major health care facility in its region, with many beds for intensive care and additional beds for patients
            who need long-term care</p>
        <a href="" class="btn btn-danger">Read More</a>
    </div>
</div>
<div class="container">
    <h3 class="text-center bg-warning p-3 rounded-2">All Doctors are as Following:- </h3>
    <div class="row">
        @foreach ($data as $item)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-light">
                    <img src="{{asset('images/'. $item->dp)}}" alt="" width="200px" height="300px"
                        class="rounded-circle card-img-top p-3">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h4>Dr.{{$item->name}}</h4>
                        <h4 class="text-danger lead">Specialist:-{{$item->specialist}}</h4>
                        <h4 class="lead">Exp Year:-{{$item->experience}}</h4>
                        <h4 class="lead">Treatment:-{{$item->treatment}}</h4>
                        @auth
                        <a href="{{route('applyPatient')}}" class="btn btn-success">Book To Appointment</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
