@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <style>
        .N {
            font-size: 53px;
            background: #ff66000f;
            color: var(--orange);
        }
        #side{
            margin-left: 33rem;
        }
        #s2 ,#s3 {
            margin-left: 2rem;
        }
        .foo{
            background:darkslategrey;
        }
        .s130 form{

            position: relative;
            top: 6.5rem;
        }
        .jumbotron{
             padding-bottom: 0px;
             padding-top: 0px;
             margin-bottom: 0px;
         }
        .py-4{
            padding: 0px!important;
        }
        .my-5, .mt-4{
            margin: 0px!important;
        }
        input{
            color:#fff!important;
        }
        ::placeholder{
            color:#fff!important;
        }


    </style>
@endsection
@section('content')


    <div class="jumbotron jb" style="background-image: url('https://cdn.pixabay.com/photo/2016/12/19/10/16/hand-1917895_960_720.png');background-size: 86rem 100%;">
        @include('inc.serachoffrepage.searchoff')
    </div>
    <div class="jumbotron" style="padding: 0px;padding-top: 21px!important">
        @include('inc.serachoffrepage.comment')
    </div>

    <div class="jumbotron">
        <section class="mt-4">
            <!-- Logo carousel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="1800">
                <div class="carousel-inner">
                    <!-- First slide -->
                    <div class="carousel-item active carousel-item-left">
                        <!--Grid row-->
                        <div class="row">

                            <!--First column-->
                            <div class="col-lg-3 col-md-6 text-center
 align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/nike.png" class="img-fluid px-4" alt="Nike - logo" style="max-height: 40px">
                            </div>
                            <!--/First column-->

                            <!--Second column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/amazon.png" class="img-fluid px-4" alt="Amazon - logo" style="max-height: 40px">
                            </div>
                            <!--/Second column-->

                            <!--Third column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/sony.png" class="img-fluid px-4" alt="Sony - logo" style="max-height: 40px">
                            </div>
                            <!--/Third column-->

                            <!--Fourth column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/samsung.png" class="img-fluid px-4" alt="Samsung - logo" style="max-height: 40px">
                            </div>
                            <!--/Fourth column-->

                        </div>
                        <!--/Grid row-->
                    </div>
                    <!-- First slide -->

                    <!-- Second slide -->
                    <div class="carousel-item carousel-item-next carousel-item-left">
                        <!--Grid row-->
                        <div class="row">

                            <!--First column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/airbus.png" class="img-fluid px-4" alt="Airbus - logo" style="max-height: 40px">
                            </div>
                            <!--/First column-->

                            <!--Second column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/yahoo.png" class="img-fluid px-4" alt="Yahoo - logo" style="max-height: 40px">
                            </div>
                            <!--/Second column-->

                            <!--Third column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/deloitte.png" class="img-fluid px-4" alt="Deloitte - logo" style="max-height: 40px">
                            </div>
                            <!--/Third column-->

                            <!--Fourth column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/ge.png" class="img-fluid px-4" alt="GE - logo" style="max-height: 40px">
                            </div>
                            <!--/Fourth column-->

                        </div>
                        <!--/Grid row-->
                    </div>
                    <!-- Second slide -->

                    <!-- Third slide -->
                    <div class="carousel-item">
                        <!--Grid row-->
                        <div class="row">

                            <!--First column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/kpmg.png" class="img-fluid px-4" alt="KPMG - logo" style="max-height: 40px">
                            </div>
                            <!--/First column-->

                            <!--Second column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/unity.png" class="img-fluid px-4" alt="Unity - logo" style="max-height: 40px">
                            </div>
                            <!--/Second column-->

                            <!--Third column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/ikea.png" class="img-fluid px-4" alt="Ikea - logo" style="max-height: 40px">
                            </div>
                            <!--/Third column-->

                            <!--Fourth column-->
                            <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                <img src="https://mdbootstrap.com/img/logo/brands/aegon.png" class="img-fluid px-4" alt="Aegon - logo" style="max-height: 40px">
                            </div>
                            <!--/Fourth column-->

                        </div>
                        <!--/Grid row-->
                    </div>
                    <!-- Third slide -->
                </div>
            </div>
            <!-- Logo carousel -->

        </section>
    </div>


    @include('inc.welcomepage.footer')
@endsection

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>
