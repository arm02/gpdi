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
    <div class="container">
      <a href="/" class="brand-logo" style="font-size: 22px; margin-left: -25px;"><i class="material-icons">domain</i>GPdI Kp.Makassar</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        @include('menu')  
      </ul>
      <ul class="side-nav" id="mobile-demo">

       @include('menu')

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
      $(".all").css("background-color","#1976d2 ");
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