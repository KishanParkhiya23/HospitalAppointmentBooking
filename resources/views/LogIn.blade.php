@extends('Main.Admin')

@section("admin")


<div class="container" style="margin-top: 10rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card p-3 py-5 border">
                <h3 class="text-center text-uppercase text-secondary">Log In</h3>
                <div class="row my-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if (Session::has('EmailFail'))
                        <span class="alert alert-danger w-100 d-block py-2x">{{Session::get('EmailFail')}}</span>
                        @endif
                        @if (Session::has('PassFail'))
                        <span class="alert alert-danger w-100 d-block py-2x">{{Session::get('PassFail')}}</span>
                        @endif
                        @if (Session::has('LogInFirst'))
                        <span class="alert alert-danger w-100 d-block py-1 px-2" style="font-size:.9rem">{{Session::get('LogInFirst')}}</span>
                        @endif
                        <form action="{{route('LogInCheck')}}" method="post">
                            @csrf
                            <input type="email" placeholder="Enter Email id" class="form-control mt-3" name="LogEmail">
                            @error('LogEmail')
                            <span class="text-danger mb-4 d-block" style="font-size: 0.8rem"> *** {{$message}}</span>
                            @enderror
                            <input type="password" name="LogPswd" class="form-control mt-3" placeholder="Enter Password">
                            @error('LogPswd')
                            <span class="text-danger mb-4 d-block" style="font-size: 0.8rem"> *** {{$message}}</span>
                            @enderror
                            <p class="float-left mt-3"><a href="{{route('SignUp')}}" class="text-secondary" style="font-size:.9rem">Create new account ?</a></p>
                            <p class="float-right mt-3"><a href="{{route('ForgetPass')}}" class="text-info" style="font-size:.9rem">Forget Password</a></p>
                            <div class="row" style="margin-top:5.5rem">
                                <div class="col-md-6 ">
                                    <input type="button" value="Cancle" class="btn btn-outline-info w-100 my-2">
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" value="LogIn" class="btn btn-info w-100  my-2">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection