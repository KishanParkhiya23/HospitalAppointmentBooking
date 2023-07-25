@extends('Main.Admin')

@section("admin")

<div class="container" style="margin-top: 7rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-9">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="img\logo.png" width="100" class="rounded-circle">
                </div>
                <div class="text-center mt-3 px-5">
                    <h5 class="mt-2 mb-0">{{$data -> Fname}} {{$data -> Lname}}</h5>
                    <h6 class="mt-2 mb-0 text-secondary">{{$data -> Email}}</h6>

                    <div class="table-responsive my-3">
                        <table class="table text-left">
                            <thead>
                                <tr class="bg-info text-white">
                                    <th scope="col" style="width: 50%;padding:.33rem 1rem;">Service</th>
                                    <th scope="col" style="width:30%;padding:.33rem 1rem;">Doctor</th>
                                    <th scope="col" style="width: 20%;padding:.33rem 1rem;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Ap['ap'] as $key => $app)
                                <tr>
                                    <td style="padding:.33rem 1rem;">{{$app -> Service}} (Pending)</td>
                                    <td style="padding:.33rem 1rem;">{{$app -> Doctor}}</td>
                                    <td style="padding:.33rem 1rem;">{{$app -> Date}}</td>
                                </tr>
                                @endforeach
                                @foreach ($Ap['ac'] as $key => $app)
                                <tr>
                                    <td style="padding:.33rem 1rem;">{{$app -> Service}} (confirm)</td>
                                    <td style="padding:.33rem 1rem;">{{$app -> Doctor}} ({{$app -> Time}})</td> 
                                    <td style="padding:.33rem 1rem;">{{$app -> Date}}</td>
                                </tr>
                                @endforeach
                                @foreach ($Ap['re'] as $key => $app)
                                <tr>
                                    <td style="padding:.33rem 1rem;">{{$app -> Service}} (Reject)</td>
                                    <td style="padding:.33rem 1rem;">{{$app -> Doctor}}</td>
                                    <td style="padding:.33rem 1rem;">{{$app -> Date}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$Ap['ap']->links()}}
                        <!-- {{$Ap['ac']->links()}} -->
                        <!-- {{$Ap['re']->links()}} -->
                       
                    </div>

                    <div class="buttons">
                        <a href="{{route('LogOut')}}" class="btn btn-outline-info px-4">
                            Log Out
                        </a>
                        <a href="{{route('Edit')}}" class="btn btn-info px-4 ms-3">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection