@extends('frontshow.frontmaster')
<link rel="stylesheet" href="{{asset('css/press.css')}}">
@section('content')

<div class="press-text">
    <div class="container">
        <div class="pressdiv">
            <h1>Press</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
    </div>
</div>

<section id="about" class="about-section-padding third">
    <div class="container">
        <div class="row">
            @foreach($data as $event)
            <div class="col-md-4">
                <div class="about-img">
                    <img src="{{asset('images/upload/'.$event->image)}}" alt="" class="image-fluid">
                </div>

                <h3>{{$event->level}}</h3>
                <p>{{$event->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
    

</section>
@endsection