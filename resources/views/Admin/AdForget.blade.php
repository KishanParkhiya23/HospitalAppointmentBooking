@extends('Admin.AdMain.AdMaster')

@section('AdMain')


<div class="container" style="margin-top: 7rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="img\logo.png" width="100" class="rounded-circle">
                </div>

                <form action="{{route('AdForgetPswdSave')}}" method="POST">
                    @csrf
                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @if (session()->has('MobileNotMatched'))
                                <span class="alert alert-danger w-100 d-block py-1 mt-3"> {{Session::get('MobileNotMatched')}}</span>
                                @endif
                                @if (session()->has('EmailNotMatched'))
                                <span class="alert alert-danger w-100 d-block py-1 mt-3"> {{Session::get('EmailNotMatched')}}</span>
                                @endif
                                @if (session()->has('BothNotMatched'))
                                <span class="alert alert-danger w-100 d-block py-1 mt-3"> {{Session::get('BothNotMatched')}}</span>
                                @endif
                                <input type="Email" class="form-control" style="margin-top: 2rem!important" name="FEmail" placeholder="Enter Registered Email">
                                <span class="text-danger float-left" style="font-size:0.8rem">
                                    @error('FEmail')
                                    *** {{$message}}
                                    @enderror
                                </span>
                                <input type="number" class="form-control" style="margin-top: 2rem!important" name="FMobile" placeholder="Enter Registered Mobile Number">
                                <span class="text-danger float-left" style="font-size:0.8rem">
                                    @error('FMobile')
                                    *** {{$message}}
                                    @enderror
                                </span>
                                <input type="password" class="form-control" style="margin-top: 2rem!important" name="FNPswd" placeholder="Enter New Password">
                                <span class="text-danger float-left" style="font-size:0.8rem">
                                    @error('FNPswd')
                                    *** {{$message}}
                                    @enderror
                                </span>
                                <input type="password" class="form-control" style="margin-top: 2rem!important" name="FRNPswd" placeholder="Enter Re-Enter Password">
                                <span class="text-danger float-left" style="font-size:0.8rem">
                                    @error('FRNPswd')
                                    *** {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="buttons mt-5">
                            @if (session()->has('AdLoggedIn'))
                            <a href="{{route('AdHome')}}" class="btn btn-outline-info px-4">
                                Cancle
                            </a>
                            @else
                            <a href="{{route('AdLogIn')}}" class="btn btn-outline-info px-4">
                                Cancle
                            </a>
                            @endif
                            <input type="submit" class="btn btn-info px-4 ms-3" value="Change">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection