@extends('Admin.AdMain.AdMaster')

@section('AdMain')


<div class="container" style="margin-top: 7rem !important;margin-bottom: 7rem !important;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="{{(!empty($data->img))? url('img/'.$data->img):url('upload/no_image.jpg')}}" width="100" class="rounded-circle"><br>
                    <label for="EProfile" class="text-info mt-2 d-block" style="font-size:.9rem">Change Image</label>
                </div>
                <form action="{{route('AdEditSave',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- For Update profile image  -->
                    <input type="file" name="EProfile" id="EProfile" class="d-none">

                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @error('Name')
                                <span class="text-danger float-left m-0 p-0" style="font-size:.8rem">{{$message}}</span>
                                @enderror
                                <input type="text" class="form-control my-3" name="Name" value="{{$data->Name}}">
                                @error('Mobile')
                                <span class="text-danger float-left m-0 p-0" style="font-size:.8rem">{{$message}}</span>
                                @enderror
                                <input type="number" class="form-control my-3" name="Mobile" value="{{$data->Mobile}}">

                                <div class="float-left my-2">
                                    <label for="#" class="float-left mr-3">Gender : </label>
                                    <input type="radio" id="Male" value="Male" name="Gender" {{$data->Gender == 'Male' ? 'checked' : ''}}>
                                    <label for="Male" class="mr-3">Male</label>
                                    <input type="radio" id="Female" value="Female" name="Gender" {{$data->Gender == 'Female' ? 'checked' : ''}}>
                                    <label for="Female" class="mr-3">Female</label>
                                    <input type="radio" id="Other" value="Other" name="Gender" {{$data->Gender == 'Other' ? 'checked' : ''}}>
                                    <label for="Other">Other</label>
                                </div>

                                <textarea name="DocDetail" id="DocDetail" class="form-control my-3" rows="5">{{$data->Details}}</textarea>

                                <a href="{{route('AdChangePswd')}}" class="float-right my-3 text-info">Change Password</a>
                            </div>
                            
                            <div class="col-md-2"></div>
                        </div>

                        <div class="buttons">
                            <a href="{{route('AdProfile')}}" class="btn btn-outline-info px-4">
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