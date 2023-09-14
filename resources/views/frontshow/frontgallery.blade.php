@extends('frontshow.frontmaster')
<!-- <link rel="stylesheet" href="css/community.css"> -->
@section('content')
<style>
    .widepic img {
        width: 100%;
        height: 20rem;
        margin-top: 3rem;
    }
</style>
<div class="container">
    <section id="about" class="about-section-padding gridx commx">
        <div class="row gridin comm">
        @foreach($data as $photo)
            <div class="col-lg-6 col-md-12 col-12">
                <div class="about-img">
                    <img src="{{asset('images/upload/'.$photo->image)}}" alt="" class="img-fluid">
                </div>
            </div>
            @endforeach
        </div> 
    </section>

</div>
@endsection

<!-- <div class="col-lg-6 col-md-12 col-12">
                <div class="about-img">
                    <img src="images/food 1.jpg" alt="" class="img-fluid">
                </div>
            </div> -->



<!-- <div class="col-lg-12 col-md-12 col-12 widepic">
        <div class="about-img">
            <img src="images/food11.jpg" alt="" class="img-fluid">
        </div>
    </div> -->