@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="15000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/homepage/go5.jpg" alt="First slide">
            <div class="carousel-caption text-left">
                <h5 class="display-4 animate-plus" data-animation-group="group2" data-animations="bounceIn, zoomOut,fadeIn" data-animation-duration="3s,2s,2s" data-animation-delay="2000">Ministering Love In a Hurting World</h5>
                <button class="btn mr-auto animate-plus" data-animations="fadeInLeft" data-animation-delay="6s" data-animation-duration="5s"><a class="" data-animations="bounceIn" href="#"> NEW VENUE </a></button>
                <button class="btn ml-3 animate-plus" data-animations="fadeInRight" data-animation-delay="6s" data-animation-duration="5s"><a href="#"> SERVICES </a> </button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/homepage/go1.jpg" alt="Second slide">
            <div class="carousel-caption text-left  d-md-block">
                <h5 class="display-3 animate-plus" data-animation-group="group3" data-animations="bounceIn, zoomOut,fadeIn" data-animation-duration="3s,2s,2s" data-animation-delay="">NEW VENUE</h5>
                <p class="display-4 lead animate-plus" data-animations="fadeInRight" data-animation-delay="6s" data-animation-duration="5s">We have moved!!</p>
                <button class="btn btn-lg animate-plus" data-animations="fadeInLeft" data-animation-delay="6s" data-animation-duration="5s"><a href="#"> GIVE </a></button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/homepage/go8.jpg" alt="Third slide">
            <div class="carousel-caption text-left  d-md-block">
                <h5 class="display-3 animate-plus" data-animation-group="group3" data-animations="bounceIn, zoomOut,fadeIn" data-animation-duration="3s,2s,2s" data-animation-delay="">SUNDAY SERVICE</h5>
                <p class="display-4 lead animate-plus" data-animations="fadeInRight" data-animation-delay="6s" data-animation-duration="5s">5:30PM - 8:00PM</p>
                <button class="btn btn-lg animate-plus" data-animations="fadeInLeft" data-animation-delay="6s" data-animation-duration="5s"><a href="#"> JOIN US </a></button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/homepage/go7.jpg" alt="Third slide">
            <div class="carousel-caption text-left  d-md-block">
                <h5 class="display-3 animate-plus" data-animation-group="group3" data-animations="bounceIn, zoomOut,fadeIn" data-animation-duration="3s,2s,2s" data-animation-delay="">THURSDAY EVENING SERVICE</h5>
                <p class="display-4 lead animate-plus" data-animations="fadeInRight" data-animation-delay="6s" data-animation-duration="5s">5:30PM - 8:00PM</p>
                <button class="btn btn-lg animate-plus" data-animations="fadeInLeft" data-animation-delay="6s" data-animation-duration="5s"><a href="#"> JOIN US </a></button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- WELCOME SECTION -->
<div class="jumbotron bg-light text-center welcome">
    <h1 class="display-4">Welcome to THE GO CHURCH!</h1>
    <p class="lead">
        Our mission is to minister love in a hurting world.
        We are based in Nairobi, Kenya. Our mandate to reach the lost with the love of Christ, to teach them the word and who they are in God and to empower believers by the Holy Spirit to live to their fullness. </p>
    <hr class="my-4">
    <a class="btn text-light btn-lg" href="#" role="button">Know More</a>
</div>

<!-- END WELCOME -->

<!-- QUICKTOUR -->
<div class="row quicktour">
    <div class="col-xl-3 col-xs-12 col-sm-12 dark-overlay">
        <img src="/img/homepage/go10.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">I'm New Here</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/homepage/go9.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Worship With Us</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/homepage/goKids.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Serve</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/homepage/go6.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Discipleship</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>
</div>



<!-- END QUICKTOUR -->

<!-- EVENTS -->
<div class="row mt-5">
    <div class="col-xl-9 col-xs-12 event-countdown" style="background-image: url('/img/bg-5.jpg');">
        <h1 class="text-center">Next Event Starts In:</h1>
        <div class="clock  "></div>
    </div>

    <div class="col-xl-3">
        <h1>Upcoming Events</h1>
        <div class="">
            <div class="col-md-3">
                <h3><span class="badge badge-info">June 28</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Sunday Service</strong><br>
                <em>at Ngara Shopping Complex,5th Floor</em><br>
                <span class="small">10:00am - 12:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-info">July 2</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Evening Service</strong><br>
                <em>at Ngara Shopping Complex,5th Floor</em><br>
                <span class="small">5:30 PM - 8:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-info">Dec 3</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Sunday Service</strong><br>
                <em>at Ngara Shopping Complex,5th Floor</em><br>
                <span class="small">10:00am - 12:00 PM</span>
            </div>
        </div>
    </div>
</div>
<!-- END EVENTS -->


<!-- LOCATION -->
<hr class="mt-5">
<h3 class=" text-center display-4">Our Location</h3>
<div class="mapouter">
    <div class="gmap_canvas"><iframe width="1500" height="500" src="https://maps.google.com/maps?q=nextgen&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
</div>

<!-- END LOCATION -->

@stop