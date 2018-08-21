@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/cong1.jpg" alt="First slide">
                <div class="carousel-caption text-left">
                    <h5 class="display-3">WELCOME TO RATC</h5>
                    <p class="display-4 lead">Ministering Love In a Hurting World</p>
                    <button class="btn mr-auto"><a href="#">  NEXTGEN PROJECT </a></button>
                    <button class="btn ml-3"><a href="#"> SERVICES </a> </button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/nextgen8.jpg" alt="Second slide">
                <div class="carousel-caption text-left  d-md-block">
                    <h5 class="display-3">NEXTGEN PROJECT</h5>
                    <p class="display-4 lead">We are moving!!</p>
                    <button class="btn btn-lg"><a href="#">  GIVE </a></button>
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



    <!-- EVENTS -->
    <div class="row">
        <div class="card-deck">
            <div class="col-sm-12">
                <div class="card">
                <a href="#" class="badge">26th August</a>
                    <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo quibusdam fugit animi repudiandae, ipsum possimus!</p>
                    <p class="card-text"><small class="text-muted">Click to Register</small></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">
                <a href="#" class="badge">1st September</a>
                    <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo quibusdam fugit animi repudiandae, ipsum possimus!</p>
                    <p class="card-text"><small class="text-muted">Click to Register</small></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">
                <a href="#" class="badge">30th October
                </a>
                    <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo quibusdam fugit animi repudiandae, ipsum possimus!</p>
                    <p class="card-text"><small class="text-muted">Click to Register</small></p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- END EVENTS -->


    <!-- WELCOME SECTION -->


        <div class="jumbotron bg-light text-center">
            <h1 class="display-4">Welcome to RATC!</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In voluptatibus harum totam? Voluptas eaque dolores porro, doloribus esse corporis eveniet.</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, modi veniam? Velit.</p>
            <a class="btn text-light btn-lg" href="#" role="button">Know More</a>
        </div>

    <!-- END WELCOME -->


    <!-- QUICKTOUR -->
    <div class="quicktour">
        <div class="">
            <div class="col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="/img/ratc1.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title display-4">I'm New Here</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit sequi nulla, voluptatem earum accusamus iure obcaecati soluta voluptate repellat ipsa.</p>
                    <a class="btn text-light btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-12">
                <div class="card">
                    <img class="card-img-top " src="/img/ratc4.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title  display-4">Worship With Us</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tempore iure tempora eveniet, rem impedit! Quod non aliquid soluta porro?</p>
                    <a class="btn text-light btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="/img/ratc7.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title  display-4">Serve</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat adipisci aliquid nemo magni natus veniam laboriosam optio voluptatem sapiente harum.</p>
                    <a class="btn text-light btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
     <!--END QUICKTOUR -->

@stop
