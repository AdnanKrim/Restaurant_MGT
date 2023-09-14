@extends('frontshow.frontmaster')
<link rel="stylesheet" href="css/aboutus.css">
<link rel="stylesheet" href="css/hs$lc.css">
<link rel="stylesheet" href="css/private.css">
@section('content')
<div class=" container texthl">
    <div>
    <h4 class="text-success">{{ Session::get('message') }}</h4>
        <h1>House And Location</h1>
    </div>
</div>
<section class="only-text">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eum, ad voluptas eius pariatur modi hic
            quaerat eligendi autem, molestias ducimus veniam harum illo? Maiores, porro.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sapiente beatae vel dolor, excepturi, ut
            earum molestias, autem quibusdam dolorum totam! Fuga magnam ipsum eum aliquid.</p>
    </div>
</section>
<section class="pvt-form">
    <div class="container">
        <form action="contactForm" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number" name="phonenum">
            </div>
            <div class="mb-3 form-group">
                
                <select class="form-select" aria-label="Default select example" name="inquiry">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Formal Inquiry">Formal Inquiry</option>
                </select>
            </div>
            <div class="form-group lst-cld">
                <textarea type="text" class="form-control" id="formGroupExampleInput" name="message">Write Your Objection</textarea>
            </div>
            <div class="private-btn">
                <div class="container">
                    <button class="btn btn-transparent border abc"> SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection