<!DOCTYPE html>
  <html>

    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{url('materialize/css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      @yield('header')
    </head>

    <body>

    <nav>
    <div class="nav-wrapper all">
    <div class="container" style="width: 75%;">
      <a href="{{url('/')}}" class="brand-logo" style="font-size: 22px; margin-left: -25px;"><i class="material-icons">domain</i>GPdI Kp.Makassar</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="{{url('/')}}">Home</a></li>
 <li class="{{ Request::segment(1) === 'wadah' ? 'active' : null }}"><a href="{{url('/wadah')}}">Wadah</a></li>
 <li class="{{ Request::segment(1) === 'jadwal' ? 'active' : null }}"><a href="{{url('/jadwal')}}">Jadwal Ibadah</a></li>
  <li><a class='dropdown-button' data-activates='dropdown5'>Info Rohani</a></li>
  <ul style="margin-top: 64px;" id='dropdown5' class='dropdown-content'>
    <li><a href="{{url('/')}}" style="color: #1976d2">Ringkasan Khotbah</a></li>
    <li><a href="{{url('/')}}" style="color: #1976d2">Artikel Rohani</a></li>
  </ul>
  <li><a class='dropdown-button' data-activates='dropdown1'>Interaktif</a></li>
  <ul style="margin-top: 64px;" id='dropdown1' class='dropdown-content'>
    <li class="{{ Request::segment(1) === 'kotakdoa' ? 'active' : null }}"><a href="{{url('/kotakdoa')}}" style="color: #1976d2">Permohonan Doa</a></li>
    <li class="{{ Request::segment(1) === 'kotakkeselamatan' ? 'active' : null }}"><a href="{{url('/kotakkeselamatan')}}" style="color: #1976d2">Keselamatan</a></li>
    <li><a href="#!" style="color: #1976d2">Pengakuan Iman</a></li>
  </ul>
 <li><a class='dropdown-button' data-activates='dropdown3'>Multimedia</a></li>
  <ul style="margin-top: 64px;" id='dropdown3' class='dropdown-content'>
    <li><a href="{{url('/')}}" style="color: #1976d2">Gallery</a></li>
    <li><a href="{{url('/')}}" style="color: #1976d2">Alkitab Online</a></li>
    <li><a href="#!" style="color: #1976d2">Worker</a></li>
  </ul>
   <li><a href="{{url('/tentang')}}" class="main-nav btn blue-text text-accent-2 white waves-effect"><i class="material-icons">info_outline</i></a></li>

      </ul>


      <ul class="side-nav" id="mobile-demo">

              <li><a href="{{url('/')}}">Home</a></li>
 <li><a href="{{url('/wadah')}}">Wadah</a></li>
 <li><a href="{{url('/jadwal')}}">Jadwal Ibadah</a></li>
  <li><a class='dropdown-button' data-activates='dropdown11'>Info Rohani</a></li>
  <ul style="margin-top: 64px;" id='dropdown11' class='dropdown-content'>
    <li><a href="{{url('/')}}" style="color: #1976d2">Ringkasan Khotbah</a></li>
    <li><a href="{{url('/')}}" style="color: #1976d2">Artikel Rohani</a></li>
  </ul>
  <li><a class='dropdown-button' data-activates='dropdown12'>Interaktif</a></li>
  <ul style="margin-top: 64px;" id='dropdown12' class='dropdown-content'>
    <li><a href="{{url('/kotakdoa')}}" style="color: #1976d2">Permohonan Doa</a></li>
    <li><a href="{{url('/kotakkeselamatan')}}" style="color: #1976d2">Keselamatan</a></li>
    <li><a href="#!" style="color: #1976d2">Pengakuan Iman</a></li>
  </ul>
 <li><a class='dropdown-button' data-activates='dropdown13'>Multimedia</a></li>
  <ul style="margin-top: 64px;" id='dropdown13' class='dropdown-content'>
    <li><a href="{{url('/')}}" style="color: #1976d2">Gallery</a></li>
    <li><a href="{{url('/')}}" style="color: #1976d2">Alkitab Onlie</a></li>
    <li><a href="#!" style="color: #1976d2">Worker</a></li>
  </ul>
   <li><a href="{{url('/tentang')}}" class="main-nav btn blue-text text-accent-2 white waves-effect"><i class="material-icons">info_outline</i></a></li>

      </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">

  @yield('content')


  
   </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{url('materialize/js/jquery-3.1.0.min.js')}}"></script>
      @yield('footer')
       <script type="text/javascript">
      $(".all").css("background-color","#1976d2");
      </script>

      <script type="text/javascript" src="{{url('materialize/js/materialize.min.js')}}"></script>

      <script type="text/javascript">
       $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
      </script>

      <script type="text/javascript">

  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

  $('.dropdown-button').dropdown('open');
  $('.dropdown-button').dropdown('close');


  </script>
    </body>
  </html>