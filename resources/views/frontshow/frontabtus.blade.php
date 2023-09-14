@extends('frontshow.frontmaster')
<link rel="stylesheet" href="css/aboutus.css">
@section('content')
<section class="picture">
        <div class="container">
            <div class="pic-text">
                <h1>ABOUT US</h1>

            </div>
        </div>
        <div class="pic-img">
            <img src="images/pexels-pixabay-531321.jpg" alt="">
        </div>
    </section>
    <section class="only-text">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eum, ad voluptas eius pariatur modi hic
                quaerat eligendi autem, molestias ducimus veniam harum illo? Maiores, porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sapiente beatae vel dolor, excepturi, ut
                earum molestias, autem quibusdam dolorum totam! Fuga magnam ipsum eum aliquid.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, saepe dolorum. Et labore voluptates
                cumque ut eligendi reiciendis itaque provident ipsam ea dolorem? Doloremque accusamus earum deleniti
                praesentium quos fugiat harum dolore omnis, dolores ullam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde dolorem consectetur voluptatem sunt
                dignissimos nemo quod, sequi enim molestiae ut recusandae maxime ducimus adipisci obcaecati.</p>
            <p>Lorem, ipsum dolor.</p>
            <p>Lorem, ipsum.</p>
        </div>
    </section>
    <div class="container">
        <div class="abt-tag">
            <h1>Our People</h1>
        </div>
    </div>
    <section id="about" class="about-section-padding third">
        <div class="container">
            <div class="row">
                @foreach($user as $people)
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="{{asset('images/upload/'.$people->image)}}" alt="" class="image-fluid">
                    </div>

                    <h3>{{$people->name}}</h3>
                    <p>{{$people->about}}</p>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- <section id="about" class="about-section-padding third">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="images/food3.jpg" alt="" class="image-fluid">
                    </div>

                    <h3>ipsum dolor.</h3>
                    <p>Lorem/jddhd</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="images/food4.jpg" alt="" class="image-fluid">
                    </div>

                    <h3>ipsum dolor.</h3>
                    <p>Lorem/ipsum
                    </p>
                </div>
            </div>
        </div>

    </section> -->

@endsection