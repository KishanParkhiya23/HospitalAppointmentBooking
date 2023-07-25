@extends('Admin.AdMain.AdMaster')

@section('AdMain')


<div class="container" style="margin-top:4rem">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="section-title mt-5">
                <h2>Pending Appointment</h2>
            </div>
            <div class="table-responsive">
                <table class="table text-left">
                    <thead>
                        <tr class="bg-info text-white">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col">Service</th>
                            <th scope="col">Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Ap as $key => $app)
                        <tr>
                            <th scope="row">{{$key +1}}</th>
                            <td>{{$app -> Name}}</td>
                            <td>{{$app -> Mobile}}</td>
                            <td>{{$app -> Email}}</td>
                            <td>{{$app -> Date}}</td>
                            <td>{{$app -> Service}}</td>
                            <td><a href="{{route('AdAcceptAp',$app->id)}}" class="btn btn-info">Accept</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$Ap->links()}}

            </div>
        </div>
    </div>
</div>

@endsection