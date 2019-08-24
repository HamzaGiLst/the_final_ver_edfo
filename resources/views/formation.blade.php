@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdbpro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <style>
        .modal-content{
            padding-right: 2rem;
            padding-left: 2rem;
            padding-top: 0rem!important;
            padding-bottom: 1rem;
        }

        .shadow-textarea textarea.form-control::placeholder {
            font-weight: 300;
        }
        .shadow-textarea textarea.form-control {
            padding-left: 0.8rem;
        }
        /* Important part */
        .modal-dialog{
            overflow-y: initial !important
        }
        .modal-body{
            height: 33rem;
            overflow-y: auto;
        }
        .py-4{
            padding-top: 0px!important;
            padding-bottom: 0px!important;
        }

    </style>
@endsection
@section('content')
    <div class="jumbotron" style="margin-bottom: 0px;padding: 0px">
        <!-- Card -->
        <div class="card card-cascade wider reverse">

            <!-- Card image -->
            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://img-0.journaldunet.com/_J4yykcsKq1zevd-oLneeHuZUA0=/1280x/smart/eb2576b98c694e18b4f5801d9ce6e0e5/ccmcms-jdn/10664750.jpg" alt="Card image cap" style="height: 32rem;">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center" style="padding-top: 0px!important;">

                <!-- Title -->
                <h2 class="h1-responsive font-weight-bold text-center my-5" style="margin-top: 9px!important;margin-bottom: 0px!important;">FORMATION</h2>
                <!-- Subtitle -->

                <p class="card-text">EDFORECO s’appuie sur un solide réseau d’intervenants nationaux et internationaux, experts reconnus dans leur discipline, ayant une longue expérience du terrain et contribuant ainsi à assurer une qualité de haut niveau de nos interventions.</p>

            </div>

        </div>
        <!-- Card
             @include('inc.formation.body')-->
    </div>

    @include('inc.formation.formation_submit')

    @include('inc.welcomepage.footer')
@endsection

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>

