
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
      <title>Dashboard</title>
  </head>
  <body>
 <nav>
    <div class="nav-wrapper all">
    <div class="container">
      <a href="/admin" style="margin-left: -170px;" class="brand-logo"><i class="material-icons">domain</i>GPdI Kp.Makassar</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

      </ul>
      <ul class="side-nav" id="mobile-demo">

      </ul>
      </div>
    </div>
  </nav>
  
 <ul id="slide-out" class="side-nav fixed" style="margin-top: 65px;">
  <li class="waves-effect waves-block active "><a href="/dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>

    <li>
      <ul class="collapsible collapsible-accordion">
        <li >
          <a class="collapsible-header waves-effect waves-block ">Wadah<i class="material-icons">pages</i></a>
          <div class="collapsible-body">
            <ul>
              <li class="waves-effect waves-block "><a href="/kaumbapak/list">Kaum Bapak<i class="material-icons">person_add</i>
              </a></li>
              <li class="waves-effect waves-block "><a href="/kaumibu/list">Kaum Ibu<i class="material-icons">person_pin</i></a></li>
              <li class="waves-effect waves-block "><a href="/pemuda/list">Pemuda Joshua<i class="material-icons">perm_contact_calendar</i></a></li>
              <li class="waves-effect waves-block "><a href="/remaja/list">Remaja Kaleb<i class="material-icons">perm_identity</i></a></li>
              <li class="waves-effect waves-block "><a href="/sekolahminggu/list">Sekolah Minggu<i class="material-icons">person_pin_circle</i></a></li>
              
            </ul>
          </div>
        </li>
        <li >
          <a href="/jadwal/list" class="collapsible-header waves-effect waves-block ">Jadwal Ibadah<i class="material-icons">date_range</i></a>
        </li>

         <li>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header waves-effect waves-block ">Info Rohani<i class="material-icons">library_books</i></a>
          <div class="collapsible-body">
            <ul>
              <li class="waves-effect waves-block "><a href="/ringkasankhotbah/list">Ringkasan Khotbah<i class="material-icons">library_add
                </i></a></li>
              <li class="waves-effect waves-block "><a href="/admin">Renungan Harian<i class="material-icons">local_library</i></a></li>
              
            </ul>
          </div>
  
        <li>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header waves-effect waves-block ">Interaktif<i class="material-icons">lightbulb_outline</i></a>
          <div class="collapsible-body">
            <ul>
              <li class="waves-effect waves-block "><a href="/admin">Permohonan Doa<i class="material-icons">local_post_office</i></a></li>
              <li class="waves-effect waves-block "><a href="/admin">Keselamatan<i class="material-icons">local_pharmacy
                  </i></a></li>
              <li class="waves-effect waves-block "><a href="/admin">Pengakuan Iman<i class="material-icons">loyalty</i></a></li>
              
            </ul>
          </div>
        </li>
          <li>
          <a class="collapsible-header waves-effect waves-block ">Multimedia
          <i class="material-icons">camera_alt</i></a>
        </li>
         <li>
          <a class="collapsible-header waves-effect waves-block ">Kepengurusan / Majelis
          <i class="material-icons">assessment</i></a>
        </li>
            <li>
          <a class="collapsible-header waves-effect waves-block ">Profile GPdI
          <i class="material-icons">assignment_ind</i></a>
        </li>
            <li>
          <a class="collapsible-header waves-effect waves-block ">Tentang
          <i class="material-icons">archive</i></a>
        </li>
  

  <li class="mobile-menu"><div class="divider"></div></li>
  <li class="mobile-menu"><a class="subheader">Akun Anda</a></li>
  
    <li class="mobile-menu waves-effect waves-block"><a href="http://110.232.89.67/attendance-system/public/auth/logout"><i class="material-icons">exit_to_app</i>Form Admin</a>
  <li class="mobile-menu waves-effect waves-block"><a href="{{url('logout')}}"><i class="material-icons">exit_to_app</i>Keluar</a>
  </li>
</li>
</ul>

            </ul>
          </div>
        </li>
      </ul>
    </li>
<br>
<br>
<br>
<br>
</ul>

  <main>
  <div class="row row-main">
    <div class="col s12 m12 l12">
      <div class="card-panel" style="margin-left: 310px; margin-top: 20px;">
        <div class="row">
          <div class="col s12 m4 l4">
         @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  </body>

</html>

      <script type="text/javascript" src="{{url('materialize/js/jquery-3.1.0.min.js')}}"></script>
     
       <script type="text/javascript">
      $(".all").css("background-color","#1976d2 ");
      </script>

      <script type="text/javascript" src="{{url('materialize/js/materialize.min.js')}}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

      <script type="text/javascript">
       $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
      </script>

  <script type="text/javascript">
    $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

  </script>

  <script type="text/javascript">
    
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
  <script type="text/javascript">
  
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
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
 @yield('footer')