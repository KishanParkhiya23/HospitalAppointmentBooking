@extends('Main.Admin')

@section("admin")


<div class="container" style="margin-top: 7rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="img\logo.png" width="100" class="rounded-circle">
                </div>
                <form action="{{route('SaveEdit',$data->id)}}" method="POST">
                    @csrf
                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <input type="text" class="form-control my-3" name="EFname" value="{{$data->Fname}}">
                                <input type="text" class="form-control my-3" name="ELname" value="{{$data->Lname}}">
                                <input type="number" class="form-control my-3" name="EContact" value="{{$data->Contact}}">
                                <div class="float-left my-2">
                                    <label for="#" class="float-left mr-3">Gender : </label>
                                    <input type="radio" id="Male" value="Male" name="EGender" {{$data->Gender == 'Male' ? 'checked' : ''}}>
                                    <label for="Male" class="mr-3">Male</label>
                                    <input type="radio" id="Female" value="Female" name="EGender" {{$data->Gender == 'Female' ? 'checked' : ''}}>
                                    <label for="Female" class="mr-3">Female</label>
                                    <input type="radio" id="Other" value="Other" name="EGender" {{$data->Gender == 'Other' ? 'checked' : ''}}>
                                    <label for="Other">Other</label>
                                </div>

                                <input type="date" name="EDOB" class="form-control my-3" value="{{$data->DOB}}">
                                <select name="ECity" class="form-control">
                                    <option disabled>Select City</option>
                                    <option value="Surat" {{$data->City == 'Surat' ? 'selected' : ''}}>Surat</option>
                                    <option value="Ahemdabad" {{$data->City == 'Ahemdabad' ? 'selected' : ''}}>Ahemdabad</option>
                                    <option value="Vadodra" {{$data->City == 'Vadodra' ? 'selected' : ''}}>Vadodra</option>
                                    <option value="Rajkot" {{$data->City == 'Rajkot' ? 'selected' : ''}}>Rajkot</option>
                                    <option value="Mumbai" {{$data->City == 'Mumbai' ? 'selected' : ''}}>Mumbai</option>
                                    <option value="Hariyana" {{$data->City == 'Hariyana' ? 'selected' : ''}}>Hariyana</option>
                                    <option value="Punjab" {{$data->City == 'Punjab' ? 'selected' : ''}}>Punjab</option>
                                    <option value="Pune" {{$data->City == 'Pune' ? 'selected' : ''}}>Pune</option>
                                    <option value="Banglor" {{$data->City == 'Banglor' ? 'selected' : ''}}>Banglor</option>
                                </select>
                                <a href="{{route('ChangrPswdPage')}}" class="float-right my-3 text-info">Change Password</a>
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
                        <div class="buttons">
                            <a href="{{route('Profile')}}" class="btn btn-outline-info px-4">
                                Cancle
                            </a>
                            <input type="submit" class="btn btn-info px-4 ms-3" value="Edit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection