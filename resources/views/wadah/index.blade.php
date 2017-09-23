@extends('app')     

    @section('header')

        <title>Wadah</title>
        <style type="text/css">
            .card-image
            {
                max-height:100%;
                height:300px; 
            } 
            img
            {        
                height:300px;
                object-fit: cover;
            }
        </style>

    @endsection

    @section('content')
    <br>    
  <div class="row">
        <div class="col s12 m6">
          <br>
          <div class="card">
            <div class="carousel card-image">
            @foreach($wadahpria as $key)
              <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->sampul)}}"></a>
              @endforeach

            </div>
            <div class="card-content">
                <h3>Kaum Pria</h3>
                @foreach($katapengantarpria as $key)
              <p>{{substr(strip_tags($key->motto),0,100)}}...</p>
              @endforeach
            </div>
            <div class="card-action">
            <center>
              <a href="#" class="btn btn-primary all">Baca Selanjutnya...</a>
              </center>
            </div>
          </div>
        </div>



        <div class="col s12 m6">
          <br>
          <div class="card">
            <div class="carousel card-image">
            @foreach($wadahwanita as $key)
              <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->sampul)}}"></a>
              @endforeach

            </div>
            <div class="card-content">
                <h3>Kaum Wanita</h3>
                @foreach($katapengantarwanita as $key)
              <p>{{substr(strip_tags($key->motto),0,100)}}...</p>
              @endforeach
            </div>
            <div class="card-action">
            <center>
              <a href="#" class="btn btn-primary all">Baca Selanjutnya...</a>
              </center>
            </div>
          </div>
        </div>

<div class="col s12 m4">
          <br>
          <div class="card">
            <div class="carousel card-image">
            @foreach($wadahpemuda as $key)
              <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->sampul)}}"></a>
              @endforeach
            </div>
            <div class="card-content" style="height: 224px;">
                <h3 style="font-size: 32.5px;">Pemuda</h3>
                @foreach($katapengantarpemuda as $key)
              <p>{{substr(strip_tags($key->motto),0,75)}}...</p>
              @endforeach
              <br>
              <center>
                <a href="#" class="btn btn-primary all">Baca Selanjutnya...</a>
                </center>
            </div>
            <br>
          </div>
        </div>

<div class="col s12 m4">
          <br>
          <div class="card">
            <div class="carousel card-image">
            @foreach($wadahremaja as $key)
              <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->sampul)}}"></a>
              @endforeach
            </div>
            <div class="card-content" style="height: 224px;">
                <h3 style="font-size: 32.5px;">Remaja</h3>
                @foreach($katapengantarremaja as $key)
              <p>{{substr(strip_tags($key->motto),0,75)}}...</p>
              @endforeach
              <br>
              <center>
                <a href="#" class="btn btn-primary all">Baca Selanjutnya...</a>
                </center>
            </div>
            <br>
          </div>
        </div>

          

          <div class="col s12 m4">
          <br>
          <div class="card">
            <div class="carousel card-image">
            @foreach($wadahsekolahminggu as $key)
              <a class="carousel-item" href="#one!"><img src="{{url('images/'.$key->sampul)}}"></a>
              @endforeach
            </div>
            <div class="card-content" style="height: 224px;">
                <h3 style="font-size: 32.5px;">Sekolah Minggu</h3>
                @foreach($katapengantarsekolahminggu as $key)
              <p>{{substr(strip_tags($key->motto),0,75)}}...</p>
              @endforeach
              <br>
              <center>
                <a href="#" class="btn btn-primary all">Baca Selanjutnya...</a>
                </center>
            </div>
            <br>
          </div>
        </div>




      </div>

@endsection

@section('footer')

<script>
$(document).ready(function(){
    $('.carousel').carousel();
});
</script>

@endsection