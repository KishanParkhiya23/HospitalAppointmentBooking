@extends('Main.Admin')

@section("admin")
<!-- about start from here  -->
<div id="About">
    <div class="container section-title py-5 text-center">
        <h2 class="text-center"> ABOUT US</h2>
        <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
        </p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://bootstrapmade.com/demo/templates/Medicio/assets/img/about.jpg" alt="" class="w-100 px-5 rounded">
            </div>
            <div class="col-lg-6 pt-4 px-5 pt-lg-0 content aos-init aos-animate">
                <h3 class="pb-4">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="fa-solid fa-circle-check"></i></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="fa-solid fa-circle-check"></i></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p class="fst-italic"> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
            </div>
        </div>
    </div>
</div>

<section id="counts" class="counts my-5">
    <div class="container-fluid px-5 aos-init aos-animate" data-aos="fade-up">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box"> <i class="fas fa-user-md"></i> <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Doctors</strong> consequuntur quae qui deca rode</p> <a href="#">Find out more »</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box"> <i class="far fa-hospital"></i> <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p> <a href="#">Find out more »</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box"> <i class="fas fa-flask"></i> <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p> <a href="#">Find out more »</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box"> <i class="fas fa-award"></i> <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p> <a href="#">Find out more »</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features">
    <div class="containe-fluid aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 order-2 p-5 order-lg-1 " data-aos="fade-right">
                <div class="icon-box mt-5 mt-lg-0"><i class="fa-solid fa-file-invoice"></i>
                    <h4>Est labore ad</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="icon-box mt-5"><i class="fa-solid fa-cube"></i>
                    <h4>Harum esse qui</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="icon-box mt-5"><i class="fa-solid fa-images"></i>
                    <h4>Aut occaecati</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="icon-box mt-5"><i class="fa-solid fa-shield"></i>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
            </div>
            <div class="image col-lg-6 px-5 order-1 order-lg-2 ">
                <img src="https://bootstrapmade.com/demo/templates/Medicio/assets/img/features.jpg" alt="#">
            </div>
        </div>
    </div>
</section>
<!-- about end here  -->
@endsection