<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <a class="navbar-brand text-primary mx-2">
        <i class="fa-solid fa-circle-notch " style="font-size: 1.35rem;"></i>NE <span class="text-info px-1 navbar-brand"><i class="fa-brands fa-hire-a-helper pl-1" style="font-size: 1.5rem;"></i>EALTH</span> </a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link ml-3 mx-2" href="{{route('AdHome')}}">HOME</a>
            <a class="nav-item nav-link mx-2" href="{{route('AdAppointment')}}">APPOINTMENT MANAGEMENT</a>
            <a class="nav-item nav-link" href="{{route('AdEdit')}}">CHANGE PROFILE DETAILS</a>
        </div>
        <div class="form-inline my-lg-0">
            <div class="mx-auto d-inline-block">
                <a href="{{route('AdProfile')}}"><i class="fa-solid fa-address-card text-info mr-2 mt-1 " style="font-size: 2.4rem;"></i></a>
            </div>
        </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>