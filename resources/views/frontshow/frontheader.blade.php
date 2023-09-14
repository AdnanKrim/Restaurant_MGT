<div class="topp">adnan karim</div>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container ">

        <a class="navbar-brand" href="#">
            <img class="imgg" src="images/66029travelers_table_Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle abc " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/frontabt">ABOUT US</a></li>
                        <li><a class="dropdown-item" href="/frontcom">COMMUNITY</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle abc " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MENUS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">MENUS</a></li>
                        <li><a class="dropdown-item" href="/fronthapp">HAPENINGS</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link abc" href="/fronth&l">HOURS&LOCATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc" href="/frontpress">PRESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc" href="/frontpvt">PRIVATE DINING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc" href="/frontgift">GIFT CARDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc" href="#">ORDER ONLINE</a>
                </li>
                <li class="nav-item">
                    <!-- <button class="btn btn-transparent border abc">RESERVE</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-transparent border abc" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        RESERVE
                    </button>


                </li>


            </ul>

        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content formz">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Reservations</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close" style="border: solid 3px white;"></button>
            </div>
            <form action="add-reserve" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold;">Number of person</label>
                        <select class="form-select" aria-label="Default select example" name="peoplenumber">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="1">One person</option>
                            <option value="2">Two person</option>
                            <option value="3">Three person</option>
                            <option value="4">Four person</option>
                            <option value="5">Five person</option>
                            <option value="6">Six person</option>
                            <option value="7">Seven person</option>
                            <option value="8">Eight person</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style=" font-weight:bold;">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="Submit" class="btn btn-transparent border abc">FIND A TABLE</button>
                </div>
            </form>
        </div>
    </div>
</div>