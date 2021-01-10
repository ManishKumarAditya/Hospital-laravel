@extends('homepage.base')
@section('title')
    
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">Apply doctor to join my hospital</div>
                <div class="card-body bg-light">
                    <form action="{{route('applyStore')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="">Experience</label>
                            <input type="text" name="experience" class="form-control" value="{{old('experience')}}">
                            <small class="text-danger">{{$errors->first('experience')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control" value="{{old('state')}}">
                            <small class="text-danger">{{$errors->first('state')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control" value="{{old('country')}}">
                            <small class="text-danger">{{$errors->first('country')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                            <small class="text-danger">{{$errors->first('address')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Image/profile</label>
                            <input type="file" name="dp" class="form-control">
                            <small class="text-danger">{{$errors->first('dp')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Specialist</label>
                            <input type="text" name="specialist" class="form-control" value="{{old('specialist')}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Treatment</label>
                            <input type="text" name="treatment" class="form-control" value="{{old('treatment')}}">
                            <small class="text-danger">{{$errors->first('treatment')}}</small>
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