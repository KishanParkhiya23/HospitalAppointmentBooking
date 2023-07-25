@extends('Admin.AdMain.AdMaster')

@section('AdMain')

<div class="container" style="margin-top: 10rem !important;margin-bottom: 5rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <h5 class="font-weight-bold text-secondary text-center mt-2 mb-5">Admin Profile</h5>
                <div class="text-center">
                    <img src="{{ (!empty($data->img))? url('img/'.$data->img):url('img/logo.png') }}" width="100" class="rounded-circle">
                </div>
                <div class="text-center mt-3 px-5">

                    <table class="table my-4 text-left">
                        <tbody>
                            <tr>
                                <th class="bg-info text-white" style="width:30%;padding:.33rem 1rem;">Name</th>
                                <td style="width: 70%;padding:.40rem 1rem;" class="border-right">{{$data -> Name}}</td>
                            </tr>
                            <tr>
                                <th class="bg-info text-white" style="width:30%;padding:.33rem 1rem;">Email</th>
                                <td style="width: 70%;padding:.40rem 1rem;" class="border-right"> {{$data -> Email}}</td>
                            </tr>
                            <tr>
                                <th class="bg-info text-white" style="width:30%;padding:.33rem 1rem;">Mobile No.</th>
                                <td style="width: 70%;padding:.40rem 1rem;" class="border-right">{{$data -> Mobile}}</td>
                            </tr>
                            <tr>
                                <th class="bg-info text-white" style="width:30%;padding:.33rem 1rem;">Gender</th>
                                <td style="width: 70%;padding:.40rem 1rem;" class="border-right"> {{$data -> Gender}}</td>
                            </tr>
                            <tr>
                                <th class="bg-info text-white" style="width:30%;padding:.33rem 1rem;">Speciallity</th>
                                <td style="width: 70%;padding:.40rem 1rem;" class="border-right border-bottom"> {{$data -> designation}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                    <div class="buttons">
                        <a href="{{route('AdLogOut')}}" class="btn btn-outline-info px-4">
                            Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection