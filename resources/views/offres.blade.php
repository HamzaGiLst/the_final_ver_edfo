@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <style>
      .py-4{
         padding-bottom:0px!important;
      }
      .row{
         margin-right:0px;
      }

    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron"></div>
        </div>
        <div class="col-md-8">
            <div class="jmbotron">
               <?php $c = 0?>
                @while($c<4)
                    @include('inc.lesoffres.offrebox')
                       <?php $c++?>
                       <br>
                @endwhile
            </div>
        </div>
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

