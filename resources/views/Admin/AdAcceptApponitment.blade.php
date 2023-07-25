@extends('Admin.AdMain.AdMaster')

@section('AdMain')

<style>
    form label {
        font-size: .9rem;
        color: Gray;
        margin-bottom: 0;
    }

    .show {
        display: block;
    }
</style>


<script type="text/javascript">
    $(document).ready(function() {
        $("#No").click(function() {
            $(".show").css("display", "none");
        });
        $("#Yes").click(function() {
            $(".show").css("display", "block");
        });

    });
</script>

<div class="container" style="margin-top:4rem">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="section-title mt-5">
                <h2>Pending Appointment</h2>
            </div>

            <div class="container" style="margin-bottom: 7rem !important;">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="img\logo.png" width="100" class="rounded-circle">
                            </div>
                            <form action="{{route('AdAppointmentConfirmation',$data->id)}}" method="POST" name="myform">
                                @csrf
                                <div class="mt-3">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">

                                            <label for="Name">Name :</label>
                                            <input type="text" class="form-control mb-3" name="Name" Value="{{$data->Name}}" id="Name" disabled>


                                            <label for="Service">Service :</label>
                                            <input type="text" class="form-control mb-3" name="Service" Value="{{$data->Service}}" id="Service" disabled>

                                            <label for="Email">Email :</label>
                                            <input type="Email" class="form-control mb-3" name="Email" Value="{{$data->Email}}" id="Email" disabled>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Mobile">Mobile No :</label>
                                                    <input type="number" class="form-control mb-3" name="Mobile" value="{{$data->Mobile}}" id="Mobile" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Date">Date :</label>
                                                    <input type="text" class="form-control mb-3" name="Date" Value="{{$data->Date}}" id="Date" disabled>
                                                </div>
                                            </div>
                                            <div class="float-left my-2">
                                                <label for="#" class="float-left mr-3">Confirmation : </label>
                                                <input type="radio" id="Yes" value="Yes" name="Confirmation" checked>
                                                <label for="Yes" class="mr-3">Confirm</label>

                                                <input type="radio" id="No" value="No" name="Confirmation">
                                                <label for="No" class="mr-3">Reject</label>
                                            </div><br><br>

                                            <div class="show">
                                                <label for="Time">Provide Time :</label>
                                                @error('Time')
                                                <span class="text-danger" style="font-size:.8rem">{{$message}}</span>
                                                @enderror
                                                <input type="Time" class="form-control mb-3" name="Time" value="" id="Time">

                                            </div>

                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>


                                    <ul class="social-list">
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-dribbble"></i></li>
                                        <li><i class="fa fa-instagram"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google"></i></li>
                                    </ul>
                                    <div class="buttons text-center">
                                        <a href="{{route('AdAppointment')}}" class="btn btn-outline-info px-4">
                                            Cancle
                                        </a>
                                        <input type="submit" class="btn btn-info px-4 ms-3" value="Confirm">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection