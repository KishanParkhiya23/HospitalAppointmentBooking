@extends('Main.Admin')

@section("admin")
<section id="starter">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5" id="starter-text">
                <div class="px-4">
                    <h1>Best Outcome For Every Patient !!!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iste tempora consequuntur veritatis exercitationem doloremque?</p>
                    <button class="btn btn-outline-primary my-2 mx-2 my-sm-0">
                        <a href="#"> GET STARTED</a>
                    </button>
                    <a href="{{route('Appointment')}}" class="btn btn-outline-info my-2 mx-2 my-sm-0">
                        APPOINTMENT
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/home.png" alt="" class="pt-5" width="75%">
            </div>
        </div>
    </div>
</section>
<section id="Starter2">
    <div class="container mt-5">
        <div class="row py-5">
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <img src="img/home2.png" alt="" width="200%">
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <h6 class="text-secondary py-4 mt-5">About Me</h6>
                <h1 class="text-uppercase py-3 mb-5">Personal Details</h1>
                <p class="text-secondary">
                    Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                </p>
                <a href="{{route('AboutUs')}}" class="btn btn-outline-info rounded-0 text-uppercase w-auto mt-4">View Full Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Section start from here  -->
<div class="our-feature py-5">
    <div class="conrtainer-fluid  section-title py-5 text-center">
        <h2 class="text-center"> OUR SERVICES</h2>
    </div>
    <div class="container text-center">

        <div class="row my-5" style="margin-bottom: 30px;">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media my-2">
                    <div class="media-body">
                        <i class="fa fa-solid fa-heart-pulse"></i>
                        <h4 class="title"><b>Heart Speciallist</b></h4>
                        <p>
                            Module lets you create an unlimited number of template variations using drag-and-drop similar to the Widgets interface.
                            Save time and frustration by visually editing your site.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media  my-2">
                    <div class="media-body">
                        <i class=" fa fa-solid fa-briefcase-medical"></i>
                        <h4 class="title"><b>Best Medical Services</b></h4>
                        <p>
                            We have include a popular js slider - Revolution slider. It is allows you to create amazing slides that will capture the attention.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media  my-2">
                    <div class="media-body">
                        <i class="fa fa-solid fa-house-user"></i>
                        <h4 class="title"><b>Care From Home</b></h4>
                        <p>
                            With a powerful tool you can be easy to customize your website as the way you want displaying personality and specific style
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Service Section end here  -->

<!-- doctor Contant start  -->
<section id="doctors" class="doctors" style="margin-bottom: 15vh;">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Doctors</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
            
            @foreach ($doctor as $doc)
            <div class="col-lg-4 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ (!empty($doc->img))? url('img/'.$doc->img):url('img\logo.png') }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{$doc->Name}}</h4> <span>{{$doc->designation}}</span>
                        <p>{{$doc->Details}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- doctor Contant end  -->

@endsection