@extends('Main.Admin')

@section("admin")


<div class="container" style="margin-top: 7rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="img\logo.png" width="100" class="rounded-circle">
                </div>

                <form action="{{route('ChangePswdSave')}}" method="POST">
                    @csrf
                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @if (Session::has('OldNotMatch'))
                                <span class="alert alert-danger d-block py-2">{{Session::get('OldNotMatch')}}</span>
                                @endif
                                @if (Session::has('BothNotMatched'))
                                <span class="alert alert-danger d-block py-2">{{Session::get('BothNotMatched')}}</span>
                                @endif
                                <input type="password" class="form-control my-4" name="OPswd" placeholder="Old Password">
                                <input type="password" class="form-control my-4" name="NPswd" placeholder="New Password">
                                <input type="password" class="form-control" name="RNPswd" placeholder="Re-Enter Password">
                                <p class="float-right"><a href="{{route('ForgetPass')}}" class="text-info d-block my-3" style="font-size:.9rem">Forget Password</a></p>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="buttons">
                            <a href="{{route('Edit')}}" class="btn btn-outline-info px-4">
                                Cancle
                            </a>
                            <input type="submit" class="btn btn-info px-4 ms-3" value="Change">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection