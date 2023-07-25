@extends('Main.Admin')

@section("admin")
<!-- doctor section start from here -->
<section id="doctors" class="doctors">

    <div class="container" style="margin-top:10vh">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title my-5">
                    <h2>Doctors</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>          

            @foreach ($doctor as $doc)
            <div class="col-lg-6 my-3">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ (!empty($doc->img))? url('img/'.$doc->img):url('img\logo.png') }}" class="img-fluid rounded-circle" alt=""></div>
                    <div class="member-info">
                        <h4>{{$doc->Name}}</h4> <span>{{$doc->designation}}</span>
                        <p>{{$doc->Details}}</p>
                        <div class="social">
                            <a href="https://twitter.com/i/flow/login"  target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- doctor section end here -->


<section id="accordion" class="faq section-bg py-5">
    <div class="container">
        <div class="section-title my-5">
            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5>
                    <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h6 class="py-2"><i class="fa-solid fa-circle-question mx-2"></i>Frequently Asked Questions? <i class="fa-solid fa-angle-down float-right mr-3"></i></h6>
                    </div>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h6 class=" py-2"><i class="fa-solid fa-circle-question mx-2"></i>Feugiat scelerisque varius morbi enim nunc? <i class="fa-solid fa-angle-down float-right mr-3"></i></h6>
                    </div>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p> Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h6 class=" py-2"><i class="fa-solid fa-circle-question mx-2"></i>Dolor sit amet consectetur adipiscing elit?<i class="fa-solid fa-angle-down float-right mr-3"></i></h6>
                    </div>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <p> Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingfour">
                <h5>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapsfour" aria-expanded="false" aria-controls="collapsfour">
                        <h6 class=" py-2"><i class="fa-solid fa-circle-question mx-2"></i>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?<i class="fa-solid fa-angle-down float-right mr-3"></i></h6>
                    </div>
                </h5>
            </div>
            <div id="collapsfour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                <div class="card-body">
                    <p> Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingfive">
                <h5>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapsfive" aria-expanded="false" aria-controls="collapsfive">
                        <h6 class=" py-2"><i class="fa-solid fa-circle-question mx-2"></i>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?<i class="fa-solid fa-angle-down float-right mr-3"></i></h6>
                    </div>
                </h5>
            </div>
            <div id="collapsfive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                <div class="card-body">
                    <p> Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection