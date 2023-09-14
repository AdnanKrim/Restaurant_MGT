<footer class="simple">
    <div class="container">
        <div class="mainfoot">
            <div class="lglist">
                <img src="images/facebook.svg" alt="">
                <img src="images/instagram.svg" alt="">
                <img src="images/twitter.svg" alt="">
            </div>
            <div class="linkbtn">
                <a href="/frontgallery">GALLERY</a>
                <a href="/frontjob">JOBS</a>
                <a href="/frontcontact">CONTACT</a>
                <button class="btn btn-transparent border abc" data-bs-toggle="modal" data-bs-target="#signupModal">EMAIL SIGNUP</button>
            </div>
        </div>
    </div>
</footer>
<div class="topp">adnan karim</div>
<section class="hidden fixed-bottom">
    <div class="container">
        <button type="button" class="btn btn-transparent border abc" data-bs-toggle="modal" data-bs-target="#exampleModal">
            RESERVE
        </button>

    </div>
</section>
<!-- signup modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content formz">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">SIGN UP</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close" style="border: solid 3px white;"></button>
            </div>
            <form action="sign-up" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold;">First Name</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold;">Last Name</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold;">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="Submit" class="btn btn-transparent border abc">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>