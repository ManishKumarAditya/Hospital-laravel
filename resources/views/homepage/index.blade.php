@extends('homepage.base')
@section('title')
this is|homepage

@endsection
@section('content')
<div class="container-fluid p-5" style="background-image: url('images/dr.jpg');background-size:cover">
    <div class="container">
        <h1 class="display-3 text-white p-4" style="font-family: 'Roboto', sans-serif;">Welcome to my Hospital <br>
            <p class="" style="font-family: 'Hachi Maru Pop', cursive;color:rgb(135, 196, 21)">(save & secure)</p>
        </h1>
        <h2 class="text-white" style="font-family: 'Roboto', sans-serif;">A hospital is a health care institution
            providing patient treatment with specialized <br>medical and
            nursing staff and medical equipment.</h2>
        <p class="lead text-white">[1] The best-known
            type of hospital is the general hospital, which typically has an emergency department to treat urgent health
            problems ranging from fire and accident victims to a sudden illness. A district hospital typically is the
            major health care facility in its region, with many beds for intensive care and additional beds for patients
            who need long-term care</p>
        <a href="" class="btn btn-danger ">Read More</a>
        <a href="" class="btn btn-outline-info me-2">More Info</a>
    </div>
</div>


<h3 class="text-center display-6 text-white p-4"
    style="background-color:rgb(15, 35, 97);font-family: 'Roboto', sans-serif;">
    <p class=" ">Smart System For Smart Patient <br>[Save & Secure]saves time, saves money and improves the quality of
        patient care.</p>
</h3>
<div class="conatiner p-4 bg-light">
    <div class="col-lg-10 mx-auto mt-5 ">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('card.png')}}" class="img-top rounded" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">Hospital Management System</h5>
                    <p class="">Manage all hospiatls system to <br>Systematic way</p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('card1.png')}}" class="img-top rounded-2" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">Electronic Health Records (EHR)</h5>
                    <p class="">A Full Patient Chart in Your Pocket.</p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('medicalbill.jpg')}}" class="img-top rounded" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">Medical Billing System</h5>
                    <p class="">Easily Capture Custom Charges During Care.</p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('patient.png')}}" class="img-top rounded" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">Better Doctors to treatment</h5>
                    <p class="">All patient's responsbility is own our doctors. </p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('comfort.jpg')}}" class="img-top rounded" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">Come in better Comfort Zone</h5>
                    <p class="">Our clinic is Neat&clean in all places</p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="{{asset('ambulance.jpg')}}" class="img-top rounded" alt="" height="200px" width="300px">
                    <br>
                    <br>
                    <h5 style="font-family: 'Roboto', sans-serif;">24 X 7 Hour All require things</h5>
                    <p class="">Extra possibilities .</p>
                    <a href="" class="nav-link" style="color: rgb(37, 141, 182)">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="text-center display-6 p-3 text-white" style="background-color:teal">
    <p class="fw-normal">[--Smart System For Smart Patient--]<br>Our Expext are contact us and Help them</p>
</h4>
<div class="container mt-5">
    <div class="row">
        @foreach ($data as $item)
        <div class="col-lg-4 mt-5">
            <div class="card shadow-lg bg-light">
                <div class="card-header card-align-center"
                    style=" background-image: linear-gradient(180deg, rgb(86, 229, 240), rgba(134, 120, 98, 0.664))">
                    <div class="row">
                        <div class="col-lg-8 ml-5">
                            <img src="{{asset('images/'. $item->dp)}}" alt="" width="60px" height="250px"
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
                <div class="text-center">
                    <div class="card-footer">
                        <br>
                        <h4 class="text-success">Specialist:-{{$item->specialist}}</h4>
                        <h4 class=" ">Dr.{{$item->getUser->name}}</h4>
                        <h6 class="">Exp-{{$item->experience}}</h6>
                        <hr>
                        @guest
                        <a href="" class="btn btn-success">JOIN US</a>
                        @endguest
                        @auth
                        <a href=" " class="btn btn-success">Fees:{{$item->fees}}/-</a>
                        <a href="{{route('applyPatient',['id'=>$item->id])}}" class="btn btn-outline-success">Book
                            Appointment</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container-fluid mt-5 p-4" style="background-color:rgba(31, 31, 37, 0.959)">
    <div class="row">
        <div class="col-lg-4 ms-2">

        </div>
        <div class="col-lg-4">
            <div class="text-center">
                <ul class="text-center" style="line-height: 4px">
                    <h5 class="text-white ms-4">Save & Secure</h5>
                    <li class="nav-item"><a href="" class="nav-link text-light mb-1 ms-5">About Us</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light ms-5">Blogs</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light ms-5">All INfo</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light ms-5"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> Contact Us</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light ms-5"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-envelope" style="background-color: rgb(172, 107, 29)" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                            </svg> Email:-manishk15800@gmail.com</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light ms-5"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                            </svg> Support:-mkaditya1508@gmail.com</a></li>
                    <br>
                    <hr>
                    <h4 class="text-warning ms-4">Follow For Support</h4>
                </ul>
            </div>
            <div class="row mt-2">
                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-facebook" style="background-color:rgb(153, 155, 144);" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </div>
                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-twitter" style="background-color:rgb(153, 155, 144)" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg>
                </div>
                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-linkedin" style="background-color:rgb(153, 155, 144);" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </div>

                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-youtube" style="background-color:rgb(153, 155, 144);" viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </div>
            </div>
            <br>
            <hr>
            <span class="float-end text-white mt-2">Copyright:-</span>
        </div>

    </div>
</div>
@endsection
