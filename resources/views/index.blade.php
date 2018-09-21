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
            <img class="d-block w-100" src="/img/baptism3.jpg" alt="First slide">
            <div class="carousel-caption text-left">
                <h5 class="display-4 animate-plus" data-animation-group="group2" data-animations="bounceIn, zoomOut,fadeIn"
                    data-animation-duration="3s,2s,2s" data-animation-delay="2000">Ministering Love In a Hurting World</h5>
                <button class="btn mr-auto animate-plus" data-animations="fadeInLeft" data-animation-delay="6s"
                    data-animation-duration="5s"><a class="" data-animations="bounceIn" href="#"> NEW VENUE </a></button>
                <button class="btn ml-3 animate-plus" data-animations="fadeInRight" data-animation-delay="6s"
                    data-animation-duration="5s"><a href="#"> SERVICES </a> </button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/nextgen7.jpeg" alt="Second slide">
            <div class="carousel-caption text-left  d-md-block">
                <h5 class="display-3 animate-plus" data-animation-group="group3" data-animations="bounceIn, zoomOut,fadeIn"
                    data-animation-duration="3s,2s,2s" data-animation-delay="">NEW VENUE</h5>
                <p class="display-4 lead animate-plus" data-animations="fadeInRight" data-animation-delay="6s"
                    data-animation-duration="5s">We are moving!!</p>
                <button class="btn btn-lg animate-plus" data-animations="fadeInLeft" data-animation-delay="6s"
                    data-animation-duration="5s"><a href="#"> GIVE </a></button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/service14.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/service11.jpg" alt="Third slide">
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
    <h1 class="display-4">Welcome to RATC!</h1>
    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In voluptatibus harum totam? Voluptas
        eaque dolores porro, doloribus esse corporis eveniet.</p>
    <hr class="my-4">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, modi veniam? Velit.</p>
    <a class="btn text-light btn-lg" href="#" role="button">Know More</a>
</div>

<!-- END WELCOME -->

<!-- QUICKTOUR -->
<div class="row quicktour">
    <div class="col-xl-3 col-xs-12 col-sm-12 dark-overlay">
        <img src="/img/ratc1.jpg" height="300" alt="">
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
        <img src="/img/ratc7.jpg" height="300" alt="">
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
        <img src="/img/ratc9.jpg" height="300" alt="">
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
        <img src="/img/ratc5.jpg" height="300" alt="">
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
                <h3><span class="badge badge-info">Sep 24</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Evening Service</strong><br>
                <em>at Highlands Platinum Restaurant</em><br>
                <span class="small">5:30 PM - 8:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-info">Sep 27</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Evening Service</strong><br>
                <em>at Highlands Platinum Restaurant</em><br>
                <span class="small">5:30 PM - 8:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-info">Oct 1</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Evening Service</strong><br>
                <em>at Highlands Platinum Restaurant</em><br>
                <span class="small">5:30 PM - 8:00 PM</span>
            </div>
        </div>
    </div>
</div>
<!-- END EVENTS -->


<!-- LOCATION -->
<hr class="mt-5" >
<h3 class=" text-center display-4">Our Location</h3>
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=nextgen%20mall%20nairobi&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>

<!-- END LOCATION -->

@stop