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
        <form action="jobForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="YourName" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email"name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number"name="phonenum">
            </div>
            <div class="form-group lst-cld">
                <textarea type="text" class="form-control" id="formGroupExampleInput" name="coverletter">Write a Cover Letter</textarea>
            </div>
            <div class="form-group ">
            <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold; margin-top:1rem; margin-bottom: -1rem; margin-left: 1rem;">Resume</label>
                <div class="col-md-12">
                    <input type="file" class="form-control" name="resume" />
                </div>
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