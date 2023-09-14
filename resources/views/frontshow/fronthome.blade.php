@extends('frontshow.frontmaster')
@section('content')
<h4 class="text-success" style="margin-left: 16rem;">{{ Session::get('message') }}</h4>
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">


        <div class="carousel-inner slidex">

            <div class="carousel-item active">
                <img src="images/food12.jpg" class="d-block w-100" alt="...">


            </div>
            <div class="carousel-item">
                <img src="images/food5.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="images/food8.jpg" class="d-block w-100" alt="...">


            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
    <section class="textclass">
        <div class="container">
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi aut neque molestiae. Nihil molestias
                ea doloribus veniam cupiditate! Excepturi ut minus quos voluptatum dicta numquam dolore!</p>
        </div>
    </section>
    <section class="backclass">
        <div class="container">
            <h1>Lorem, ipsum dolor.</h1>
            <button class="btn btn-transparent border abc">VIEW MENUS</button>
        </div>

    </section>
    <section id="about" class="about-section-padding gridx">
        <div class="container">
            <div class="row gridin">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-img">
                        <img src="images/food 1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="about-text">
                        <h2>Online Or <span style="color: blue;">de</span>r</h2>
                        <button class="btn btn-transparent border abc">ORDER NOW</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="about" class="about-section-padding gridx second">
        <div class="container">
            <div class="row gridin">
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="about-text">
                        <h2>Online Or <span style="color: blue;">de</span>r</h2>
                        <button class="btn btn-transparent border abc">ORDER NOW</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-img">
                        <img src="images/food 1.jpg" alt="" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section id="about" class="about-section-padding third">
        <div class="container">
            <div class="row">
            @foreach($events as $event)
                <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="{{asset('images/upload/'.$event->image)}}" alt="" class="image-fluid">
                    </div>

                    <h3>{{$event->level}}</h3>
                    <p>{{$event->description}}</p>
                </div>
             @endforeach
                <!-- <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="images/food4.jpg" alt="" class="image-fluid">
                    </div>

                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nesciunt necessitatibus porro?
                    </p>
                </div> -->
                <!-- <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="images/food5.jpg" alt="" class="image-fluid">
                    </div>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur laudantium vitae est!</p>
                </div> -->
            </div>
        </div>

    </section>
    <section class="gallery">
        <div class="container">
            <div class="row  row-cols-2 row-cols-sm-2 row-cols-md-5">
                <div class="col">
                    <img src="images/food6.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/food7.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/food8.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/food9.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food10.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food11.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food12.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food13.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food 1.jpg" alt="gallery" class="img-fluid">
                </div>
                <div class="col ">
                    <img src="images/food3.jpg" alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="image/food3.jpg" class="modal-img" alt="modal img">
                </div>

            </div>
        </div>
    </div>
@endsection