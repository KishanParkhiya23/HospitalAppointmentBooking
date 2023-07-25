@extends('Main.Admin')

@section("admin")

<!-- Service Section start from here  -->
<div class="our-feature py-5" style="margin-top:10vh">
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

        <div class="row  my-5">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media  my-2">
                    <div class="media-body">
                        <i class="fa fa-solid fa-bed"></i>
                        <h4 class="title"><b>Emergency Room Services. </b></h4>
                        <p>
                            The highest responsiveness level. Your website will look crisp and amazing on any device. No matter what kind of display you are using. Test it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media  my-2">
                    <div class="media-body">
                        <i class=" fa fa-solid fa-x-ray"></i>
                        <h4 class="title"><b>X-Ray Service</b></h4>
                        <p>
                            Based on Bootstrap 3, it is fully responsive at core. Every single element is designed to display beautifully in all devices.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="media  my-2">
                    <div class="media-body">
                        <i class="fa fa-solid fa-pump-medical"></i>
                        <h4 class="title"><b>Clean And Silent Environment</b></h4>
                        <p>
                            Unlimited colours, fonts, structures. Lightweight admin panel made for humans. Create something unique from the crowd with unlimited possibilities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section end here  -->
<!-- contact code start from here  -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title my-5">
                    <h2>Contact</h2>
                    <p>Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="fa fa-solid fa-location-dot"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4"> <i class="fa-solid fa-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4"> <i class="fa-solid fa-phone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact code end here  -->
@endsection