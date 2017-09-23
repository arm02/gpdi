@extends('app')

    @section('header')

        <title>GPdI Kp.Makassar</title>

        <style type="text/css">
          div.carousel a.carousel-item{
            width: 200px;  
          }
          img{
            height: 500px;
            width: 250px;
          }
        </style>

    @endsection

    @section('content')
    <center>
<br>
  <div class="carousel carousel-slider">
  @foreach($foto as $key)
    <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->foto)}}"></a>
  @endforeach
  </div>
  <br>
  	<h3>Welcome To GPdI Kampung Makassar</h3>
    <br>
    <br>
  	</center>

@endsection

@section('footer')
<script>
   $(document).ready(function(){
      $('.carousel').carousel({dist:0});
      window.setInterval(function(){$('.carousel').carousel('next')},2500)
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    });
       
</script>

@endsection