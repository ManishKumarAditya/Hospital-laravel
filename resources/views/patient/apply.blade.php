@extends('patient.base')
@section('title')
    
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">Apply patient to join doctors</div>
                <div class="card-body bg-light">
                    <form action="{{route('applyInsert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                            <small class="text-danger">{{$errors->first('address')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Age</label>
                            <input type="text" name="age" class="form-control" value="{{old('age')}}">
                            <small class="text-danger">{{$errors->first('age')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Disease</label>
                            <input type="text" name="disease" class="form-control" value="{{old('disease')}}">
                            <small class="text-danger">{{$errors->first('disease')}}</small>
                        </div>
                        <div class="mb-3">
                        
                            <input type="submit" name="send" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection