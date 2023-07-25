<style>
    .form input,
    .form select {
        border: none !important;
        border-bottom: 1px solid #000 !important;
        border-radius: 0px !important;
    }

    .form span,
    .form div {
        font-size: .8rem;
    }
</style>
@extends('Main.Admin')

@section("admin")

<div id="SignUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title my-5">
                    <h2>Sign Up </h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="{{route('SignUpSave')}}" method="post">
                    @csrf
                    <h3 class="pb-4 text-info">Regester Yourself </h3>
                    <div class="form">

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input type="text" name="SFName" id="SFName" class="form-control form-control-lg">
                                <label for="SFName">First Name</label>
                                @error('SFName')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="SLName" id="SLName" class="form-control form-control-lg">
                                <label for="SLName">Last Name</label>
                                @error('SLName')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center">
                            <div class="col-md-6">
                                <div>
                                    <label class="mr-2" style="font-size: 1.2rem;">Gender :</label>
                                    <input type="radio" name="SGender" id="SMale" value="Male">
                                    <label for="SMale" class="ml-1 mr-2" style="font-size: 1.2rem;">Male</label>
                                    <input type="radio" name="SGender" id="SFemale" value="Female">
                                    <label for="SFemale" class="ml-1 mr-2" style="font-size: 1.2rem;">Female</label>
                                    <input type="radio" name="SGender" id="SOther" value="Other">
                                    <label for="SOther" class="ml-1 mr-2" style="font-size: 1.2rem;">Other</label>
                                    @error('SGender')
                                    <div class="text-danger"> *** {{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select name="SCity" id="SCity" class="form-control form-control-lg">
                                    <option selected disabled>Select City</option>
                                    <option>Surat</option>
                                    <option>Ahemdabad</option>
                                    <option>Vadodra</option>
                                    <option>Rajkot</option>
                                    <option>Mumbai</option>
                                    <option>Hariyana</option>
                                    <option>Punjab</option>
                                    <option>Pune</option>
                                    <option>Banglor</option>
                                </select>
                                @error('SCity')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input type="number" name="SContact" id="SContact" class="form-control form-control-lg">
                                <label for="SContact">Contact Number</label>

                                @error('SContact')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="SDOB" id="SDOB" class="form-control form-control-lg">
                                <label for="SDOB">Date Of Birth</label>

                                @error('SDOB')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="email" name="SEmail" id="SEmail" class="form-control form-control-lg">
                                <label for="SEmail">Email</label>

                                @error('SEmail')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input type="Password" name="SPass" id="SPass" class="form-control form-control-lg">
                                <label for="SPass">Password</label>
                                @error('SPass')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                                @if (Session::has('NotMatched'))
                                <span class="alert alert-danger w-100 d-block py-2x">{{Session::get('NotMatched')}}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="Password" name="SCPass" id="SCPass" class="form-control form-control-lg">
                                <label for="SCPass">Confirm Password</label>
                                @error('SCPass')
                                <span class="text-danger"> *** {{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-md-6">
                            <input type="reset" value="Reset" class="btn btn-outline-secondary w-100">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Submit" class="btn btn-info w-100">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-1"></div>

        </div>

    </div>
</div>

@endsection