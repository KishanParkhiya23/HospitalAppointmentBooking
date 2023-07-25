@extends('Admin.AdMain.AdMaster')

@section('AdMain')
<style>
    body {
        background-image: url('img/AdHome.jpg');
        background-size: 100%;
    }

    @media only screen and (max-width: 1120px) {
        body {
            background: url('img/AdBackground-2.jpg');
            background-size: 100%;
        }
    }
    @media only screen and (max-width: 460px) {
        body {
            background: #a9a9a999;
            background-size: 100%;
        }
    }

    .Heading {
        height: 100vh;
        background-color: #00000099;
    }
</style>
<div class="Heading d-flex justify-content-center align-items-center font-weight-bold text-white text-center">
    <div>
        <h1 class="mb-3">ONE HEALTH</h1>
        <p class="mb-0 ">We're committed to being your source for expert health guidance. Come to us in your pursuit of wellness.</p>
    </div>
</div>

@endsection