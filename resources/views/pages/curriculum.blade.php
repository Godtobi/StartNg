<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="/css/modifiedstyles.css" rel="stylesheet" />
    <title>Curriculum</title>
<style>
         body {
            font-family: Nunito;
        }

        .navbar-custom li a {
        color: #000;
        }
        .btn-success {
        background-color: #2DCE89;
        color: #fff;
        border: thin solid #2dce89;
        }
        .btn-secondary {
        background-color: #3A0842;
        border-color: #3A0842;
        color: #fff !important;
        cursor: pointer;
        }

        .body-banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570925063/startng/Group_414_xmbnpz.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        #wrapper {
            background-image: url('https://res.cloudinary.com/obinna93/image/upload/v1571211941/Rectangle24_s77svh.png');
        }

        #wrapper-1 {
            width: 82%;
        }

        #top h4 {
            font-size: 40px;
        }

        .overlay {
            background: rgba(7, 101, 34, 0.82);
        }

        .col-md-8 {
            padding-left: 5%;
        }

        #wrapper div:nth-child(1) {
            color: whitesmoke;
        }

        #col a {
            width: 80%;
            color: #44CF6C;
            background: #FFFFFF;
            border-radius: 8px;
        }
        /* .col-text { padding-left: 15px; padding-right: 50px; } */
        /* .col-text p { margin: 13% 0;  } */

        .col-text a {
            color: #44CF6C;
            font-weight: bold;
        }

        #text-center {
            /* width: 60%; */
            /* margin: 3% 20%; */
        }

        .accordion .card-header:after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
        }

        .accordion .card-header.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\f067";
        }

        .panel-group .panel {
            /* border-radius: 5px; */
            /* border-color: #DBCCD9; */
            padding: 0;
        }

        .panel-default>.panel-heading {
            color: #000;
            font-size: 25px;
            font-weight: bold;
            background-color: #DBCCD9;
        }

        .panel-default {
            margin-bottom: 30px;
        }

        .panel-title {
            font-size: 25px;
            background: #DBCCD9;
        }

        .panel-title>a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #000;
        }

        .short-full {
            float: right;
            color: #fff;
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            /* border: solid 1px #EEEEEE; */
            /* background: rgba(129, 22, 124, 0.05); */
        }

        .course-acc {
            background: rgba(129, 22, 124, 0.05);
        }

        .panel-group .panel {
            border: none;
            /* -webkit-box-shadow: none; */
        }

        .exp-tt {
            font-size: 16px;
            padding-top: 60px;
            padding-bottom: 30px;
        }

        h3 .text-center {
            font-size: 25px;
        }

        .panel-tt {
            margin: 20px 0 40px 0;
            font-weight: bold;
        }

        .panel-title {
            font-weight: bold;
        }

        .panel-body ul {
            padding-inline-start: 10px;
        }

        .panel-body li {
            list-style-type: none;
            padding: 7px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            font-size: 16px;
        }

        .course-drop {
            padding-bottom: 40px;
        }

        .bgcolor {
            background-color: #44CF6C;
            color: #fff;
        }

        table.a {
            margin: auto;
        }

        .table {
            width: 70%;
        }

        .flexy {
            display: flex;
            justify-content: space-between;
        }

        .learn-btn-div {
            width: 30%;
            margin: 0 auto;
            padding: 0.3em;
            text-align: right;
        }

        #learn-btn {
            border-radius: 10px;
            color: #44CF6C;
            background: #FFFFFF;
            font-size: 16px;
            line-height: 22px;
            line-height: 22px;
            width: 60%;
            padding: 0.3em;
            letter-spacing: 0.655606px;
        }

        .green-bg {
            background: rgba(7, 101, 34, 0.82);
            padding: 2em 2.5em;
        }

        .exp {
            text-align: justify;
            font-size: 20px;
        }

        .more {
            color: #44CF6C;
        }

        .check {
            /* text-align: left !important; */
            display: flex;
            justify-content: space-between;
            margin-top: 0em !important;
        }

        .desc {
            width: 60%;
            padding: 1em;
        }

        .desc p {
            margin: 0.5rem;
        }

        .act-btn {
            width: 30%;
            padding-top: 1.8em;
        }

        .header {
            padding: 1em;
        }

        .header h3 {
            margin: 1rem;
        }

        .pad {
            padding: 1em;
        }

        .btn-outline-success {
            color: rgba(51, 51, 51, 0.4);
            border: none;
            font-size: 20px;
            margin: auto;
        }

        @media screen and (min-width: 1000px) {
            .flexy {
                margin-top: 0px !important;
            }
        }

        @media screen and (max-width: 768px) {
            .learn-btn-div {
                text-align: center;
            }
            #learn-btn {
                width: 100%;
            }
        }

        @media screen and (max-width: 575px) {
            .change {
                display: block !important
            }
            .img {
                margin-bottom: 1em;
            }
        }

        @media screen and (max-width: 500px) {
            .flexy {
                display: block;
                padding: 0.8em;
            }
            .desc {
                width: 100%;
                padding: 1em;
            }
            .act-btn {
                width: 70% !important;
                padding: 2em;
            }
            .learn-btn-div {
                width: 80%;
                text-align: center;
            }
            #learn-btn {
                width: 80%;
            }
            .table {
                width: 100%;
            }
            .header h3 {
                font-size: 1.55rem;
            }
        }
    </style>
  </head>
  <body>

  @include('../inc.navbar')
    <div class="container-fluid body-banner pt-5 pb-5">
        <div class="col-md-6 offset-md-1 text-white " id="top">
            <h4 class="font-weight-bold mt-5 pt-5 pb-4">Upgrade Your Skills with <br> Our Curriculum</h4>
            <p class="pb-4" style="font-size: 20px;">The HNG internship is a 3-month remote <br> internship designed ---to find and develop the <br> most talented software developers. </p>
            @if(Auth::guest())
            <a class="btn btn-custom pl-5 pr-5 mb-4" href="{{route('register')}}" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start Learning</a>
            @else
            <a class="btn btn-custom pl-5 pr-5 mb-4" href="{{route('dashboard')}}" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start Learning</a>
            @endif
        </div>
    </div>

    <div class="container mt-5 mb-5 pt-5 pb-5">
        <div class="row align-items-center">
            <div class="change" style="display: flex">
              <div class="col-md-6 img">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570975785/startng/image_2_nbexxk.png">
              </div>
              <div class="col-md-6">
                  <h4 class="font-weight-bold" style="font-size: 1.25rem">Learn Anywhere, Anytime, With Other Creatives</h4>
                  <p class="exp">The HNG internship is a 3-month remote <br> internship designed to find and develop the <br> most talented software developers. Everyone is <br> welcome to participate (there is no entrance <br> exam). </p>
                  <a href="{{route('about')}}" class="more">Learn more >></a>
              </div>
            </div>
        </div>
    </div>

    <div class="container" id="wrapper-1">
        <h4 class="text-center font-weight-bold">World Class Curriculums Just for You</h4>
        <p class="text-center" id="text-center">
            The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers.
        </p>
        <div class="row" id="row-div">
            <div class="col-md-3">
                <a role="button" href="#" class="btn btn-outline-success" style="color: #000">Full Stack Development</a>
               </div>
            <br>
            <div class="col-md-3">

             <a role="button" href="#" class="btn btn-outline-success">Mobile App Development</a>

            </div>
            <br>
            <div class="col-md-2">
                 <a role="button" href="#" class="btn btn-outline-success">Artificial Intelligence</a>
            </div>
            <div class="col-md-2">
                <a role="button" href="#" class="btn btn-outline-success">Digital Marketing</a>
                 </div>
            <div class="col-md-1">
                <a role="button" href="#" class="btn btn-outline-success">Brand...</a>
            </div>
            <div class="col-md-1">
                <a role="button" href="#" class="btn btn-outline-success" style="color: #44CF6C;"></a>
            </div>
        </div>
    </div>

    <div class="container pad" id="container-id">
       <div id="wrapper">
        <div class="overlay">
        <div class="row check">
          <div class="header">
            <h3 id="title">Full Stack Development Curriculum</h3>
          </div>
          <div class="flexy">
            <div class="desc">
                <p>The HNG internship is a 3-month remote internship designed to find and develop the most talented software developers</p>
            </div>
            <div  id="col" class="act-btn">
                @if(Auth::guest())
                <a class="btn btn-custom ml-5 pl-5 pr-5" href="{{route('register')}}">Start Learning</a>
                @else
                <a class="btn btn-custom ml-5 pl-5 pr-5" href="{{route('dashboard')}}">Start Learning</a>
                @endif
            </div>
          </div>
        </div>
       </div>
       </div>
    </div>


    <div class="container  pb-5" id="pb-5" >

        <div class="course-acc pt-5" style="background: white !important;">
            <div class="container course-drop">

                <div class="row">
                    <div class="col-sm-6" >
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Introduction
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                        </a>


                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Here you go with the content of accordion's heading 3. You may place textual information, images etc. here.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> User Research
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Ideation
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Wireframes
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Lorem Ipsum
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center font-weight-bold pb-3">Schedule for Onsite Training</h4>
        <p class="text-center pb-3">The HNG internship is a 3-month remote internship designed to find and develop <br> the most talented software developers.</p>


        <table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded a">
            <thead>
              <tr>
                <th colspan="2" class="bgcolor">Monday - Friday <br> Current time zone available: UTC +1</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>8am - 9am</td>
                  <th>Coding Challenges</th>
              </tr>
              <tr>
                  <td>9am - 12pm</td>
                  <th>Collaborative Learning</th>
              </tr>
              <tr>
                    <td>12pm - 1pm</td>
                    <th>Lunch Break</th>
                </tr>
                <tr>
                    <td>1pm - 5pm</td>
                    <th>Collaborative Learning</th>
                </tr>
                <tr>
                    <td>5pm - 5:15pm</td>
                    <th>Daily Stand-Up Meeting</th>
                </tr>
            </tbody>
          </table>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="font-weight-bold pb-3">Begin Your Journey to Being Certified in Your Field</h4>
                <p class="pb-3">The HNG internship is a 3-month remote <br> internship designed to find and develop the
                    <br> most talented software developers. Everyone is <br> welcome to participate (there is no entrance <br> exam). </p>
<a href="{{route('dashboard')}}" class="btn btn-success pl-5 pr-5 mb-4" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start
                    Learning</a>
                    @if(Auth::guest())
                    <a class="btn btn-success pl-5 pr-5 mb-4" href="{{route('register')}}" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start Learning</a>
                    @else
                    <a class="btn btn-success pl-5 pr-5 mb-4" href="{{route('dashboard')}}" style="background-color:#44CF6C; color: #fff; border-color: #44CF6C;">Start Learning</a>
                    @endif
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570976615/startng/image_4_iff7wn.png">
            </div>
        </div>
    </div>

    <!-- Footer -->
       <footer>
           <div class="container-fluid footer-top col-lg-12">
               <div class="container col-md-12 p-5">
                   <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                   <div class="row">
                   @if(Auth::guest())
                       <div class="col-md-4 mt-4">

                           <h4 class="">Ready to take the leap?</h4>
                           <a class="btn btn-custom mt-3 pl-5 pr-5"  href="{{route('register')}}">Start</a>
                       </div>
                   @else
                        <div class="col-md-4 mt-4">

                            <a class="btn btn-custom mt-3 pl-5 pr-5"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                            </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                           </form>
                       </div>
                   @endif
                       <div class="col-md-2 mt-4">

                           <li><a class="footer-link" href="{{route('about')}}">About Us</a></li>
                           <li><a class="footer-link" href="{{route('course.index')}}">Our Course</a></li>
                           <li><a class="footer-link" href="{{route('hire')}}">Hire a Grad</a></li>

                       </div>
                       <div class="col-md-2 mt-4">

                           <li>
                               <a class="footer-link" href="{{route('curriculum')}}">Curriculum</a>
                           </li>
                           <li>
                               <a class="footer-link" href="http://lucid.blog/startng">Blog</a>
                           </li>

                       </div>
                       <div class="col-md-2 mt-4">
                           <li>
                               <a class="footer-link" href="{{route('find-course')}}">Find a Course</a>
                           </li>
                           <li>
                               <a class="footer-link" href="{{route('faq')}}">FAQ</a>
                           </li>
                           <li>
                               <a class="footer-link" href="{{route('contact')}}">Contact Us</a>
                           </li>
                       </div>
                       <div class="col-md-2 mt-4">
                           <li>
                               <a class="footer-link" href="{{route('terms')}}">Terms of Service</a>
                           </li>
                           <li>
                               <a class="footer-link" href="{{route('privacy')}}">Privacy Policy</a>
                           </li>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container-fluid footer-social col-lg-12">
               <div class="container p-3">
                   <div class="clearfix">
                       <div class="float-left">

                       </div>
                       <div class="float-right">
                           <a href="https://twitter.com/hotelsng" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                   class="fab fa-twitter"></i></a>
                           <!-- <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                   class="fab fa-instagram"></i></a>
                           <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                   class="fab fa-facebook"></i></a> -->
                       </div>
                   </div>
               </div>
           </div>
       </footer>

     <script>
       document.addEventListener('DOMContentLoaded', function() {
         const title = document.querySelector('#title');
         const tabs = document.querySelectorAll('.btn-outline-success');
         const links = Array.from(tabs);

         links.forEach(link => {
           link.addEventListener('click', (e) => {
             e.preventDefault();
             let text = e.target.textContent;
             if (text !== '>') {
               title.textContent = text;
             }
           })
         })
       });
     </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>

  </html>
