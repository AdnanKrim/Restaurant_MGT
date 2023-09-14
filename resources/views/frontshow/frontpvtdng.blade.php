@extends('frontshow.frontmaster')
<link rel="stylesheet" href="css/aboutus.css">
<link rel="stylesheet" href="css/private.css">
@section('content')
<section class="picture">
  <div class="container">
    <div class="pic-text">
      <h1>Private Dining</h1>

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
<section class="private-gallery">
  <div class="container">
    <div class="row  row-cols-2 row-cols-sm-2 row-cols-md-2">
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


    </div>
  </div>
</section>
<div class="private-btn">
  <div class="container">
    <button class="btn btn-transparent border abc"> PRIVATE DINING PACKET</button>
  </div>
</div>
<section class="pvt-form">
  <div class="container">
    <form>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
      </div>
      <div class="form-group lst-cld">
        <textarea type="text" class="form-control" id="formGroupExampleInput">Example input </textarea>
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