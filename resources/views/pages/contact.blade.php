@extends('layouts.app')

@section('style')

<style>
    body {
        font-family: Nunito;
    }

    /* Style for Navbar Starts */

    .navbar-custom li a {
        color: #000;
    }

    .btn-success {
        background-color: #2DCE89;
        color: #fff;
        border: thin solid #2dce89;
    }

    .btn-success:hover {
        background-color: rgb(2, 20, 12);
        color: #fff;
        border: thin solid rgb(2, 20, 12);
    }

    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .custom-toggler.navbar-toggler {
        border-color: #000;
    }

    /* Style for Navbar Ends */
    /* Style for Footer Starts */

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .deep {
        background: #3A0842;
        color: #fff;
    }

    .deep #slink {
        background: #44CF6C;
        border-radius: 10px;
        color: white;
        padding: 10px 70px;
    }

    .deep li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        line-height: 30px;
    }

    .deep li {
        list-style: none;
    }

    .deep li a:hover {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }
    

    .icons i {
        font-size: 26px;
        height: 50px;
        width: 50px;
        padding: 10px 20px;
        color: white;
    }

    .icons i.fa.fa-twitter:hover {
        color: #00aced;
    }

    .icons i.fa.fa-facebook:hover {
        color: #3b5598;
    }

    .icons i.fa.fa-instagram:hover {
        color: #ed3833;
    }

    /* Style for Footer Ends */
    /* Body Style */

    .search {
        background-color: #44CF6C;
    }

    .support {
        background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570910454/startng/Rectangle_66_iauqka.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .contact {
        width: 1200px;
        margin-left: 25px;
    }
    @media screen and (max-width: 1024px) {
        .contact {
            width: 1200px;
            margin-left: 10px;
        }
    }
    @media screen and (max-width: 768px) {
        .contact {
            width: 1200px;
            margin-left: 10px;
        }
    }
    @media screen and (max-width: 425px) {
        .contact {
            width: 1200px;
            margin-left: -21px;
        }
    }
    @media screen and (max-width: 375px) {
        .contact {
            width: 1200px;
            margin-left: -15px;
        }
    }
    /* Body Style Ends*/
</style>
@endsection

@section('content')
    <div class="container-fluid banner">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570908542/startng/Group_411_d0xdb8.png" class="img-fluid contact" height="100">
    </div>
    <div class="container-fluid search pt-5 pb-5">
        <div class="input-group col-12 col-md-10 mx-auto pt-3 pb-3">
            <input type="text" class="form-control pt-4 pb-4" placeholder="Find answers now!" style="border: thin solid #fff; border-right-color: #44CF6C; border-radius: 4px;">
            <div class="input-group-append">
                <button class="btn btn-secondary w-100 px-md-5" type="button" style="background-color: #fff; color: #44CF6C; border-color: #fff; border-left-color: #44CF6C;">
                    Search FAQ
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <form>
            <div class="col-md-10 offset-md-1 pt-5 pb-5">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">First Name</label>
                            <input type="text" pattern = "[A-Za-z]{1,32}" title = "Please input your First Name" class="form-control" id="Fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Last Name</label>
                            <input type="text" pattern = "[A-Za-z]{1,32}" title = "Please input your Last Name" class="form-control" id="Lname" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Email Address</label>
                            <input type="email" class="form-control" id="Eaddr" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Phone Number</label>
                            <input type="text" pattern = "^[0-9\)\(+-]+$" title = "Please input a correct phone number" class="form-control" id="Pnum" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comment" class="pb-2">Write Your Message</label>
                            <textarea class="form-control" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 text-center mb-5">
                    <p class="pb-3">By filling out this form and clicking submit, <br> you acknowledge our <a href="{{route('privacy')}}" style="color: #44CF6C">privacy policy</a></p>
                    <button class="btn btn-success pl-5 pr-5">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid support pt-5 pb-5 mb-0" style="padding-left: 15px;">

        <h1 class="pt-5 mt-5 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Nunito; font-style: normal; font-weight: bold; font-size: 50px; ">
            CUSTOMER SUPPORT</h1>
        <p class="pt-3 pb-3 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 15px; letter-spacing: 0.655606px;">
            Call +23480500000 or send a mail to support@start.ng</p>

    </div>

@endsection