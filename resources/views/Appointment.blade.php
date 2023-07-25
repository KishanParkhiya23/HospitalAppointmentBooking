@extends('Main.Admin')

@section("admin")
<style>
    .form input,
    .form select {
        border: none !important;
        border-bottom: 1px solid #000 !important;
        border-radius: 0px !important;
    }

    .form span {
        margin-top: -1rem !important;
        font-size: .8rem;
        display: block;
    }
</style>

<section id="Appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="section-title my-5">
                    <h2>Make Your Appointment</h2>
                    <p>Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
            <div class="row" id="AppointmentForm">
                <div class="col-md-5">
                    <img src="img/Appointment.jpg" alt="" class="w-100 rounded accordion">
                </div>
                <div class="col-md-7 px-5">
                    <form action="{{route('AppointmentSave')}}" method="post">
                        @csrf
                        @if (Session::has('EmailNotMatched'))
                        <span class="alert alert-danger w-100 d-block py-2 ml-3">{{Session::get('EmailNotMatched')}}</span>
                        @endif

                        <div class="form pl-4">

                            <div class="row my-4">
                                <div class="col-md-6">
                                    <input type="text" name="ApName" id="ApName" class="form-control form-control-lg  mb-4" placeholder="Full Name">
                                    @error('ApName')
                                    <span class="text-danger"> *** {{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="ApMobile" id="ApMobile" class="form-control form-control-lg mb-4" placeholder=" Mobile Number">
                                    @error('ApMobile')
                                    <span class="text-danger"> *** {{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <input type="email" name="ApEmail" id="ApEmail" class="form-control form-control-lg mb-4" placeholder="Enter Your Email ID">
                                    @error('ApEmail')
                                    <span class="text-danger"> *** {{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-12">
                                    <select name="ApDoctor" id="ApDoctor" class="form-control form-control-lg mb-4">
                                        <option disabled selected>Select Doctor</option>
                                        <option value="Walter White">Walter White</option>
                                        <option value="Sarah Jhonson">Sarah Jhonson</option>
                                        <option value="William Anderson">William Anderson</option>
                                        <option value="Amanda Jepson">Amanda Jepson</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <select name="ApService" id="ApService" class="form-control form-control-lg mb-4">
                                        <option disabled selected>Service</option>
                                        <option>Medical Services</option>
                                        <option>Surgical Services</option>
                                        <option>Obstetrical Services</option>
                                        <option>Anesthesiology Services</option>
                                        <option>Laboratory Services</option>
                                        <option>Paediatric Services</option>
                                        <option>Radiology Services</option>
                                        <option>Outpatient Department</option>
                                        <option>Physiotherapy and Rehabilitation</option>
                                        <option>Nursing Services</option>
                                        <option>Communicable Diseases</option>
                                    </select>
                                    @error('ApService')
                                    <span class="text-danger"> *** {{$message}}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <textarea name="ApDescription" id="ApDescriotion" rows="5" class="form-control form-control-lg mb-2" placeholder="Give Your Descrioption"></textarea>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <input type="checkbox" name="ApCheck" id="ApCheck" required class="mb-5">
                                    <label for="ApCheck">I am sure About it...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row pl-4">
                            <div class="col-md-6">
                                <input type="reset" value="Reset" class="btn btn-outline-dark w-100 mt-2">
                            </div>
                            <div class="col-md-6">
                                <input type="submit" value="Submit" class="btn btn-info w-100 mt-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection