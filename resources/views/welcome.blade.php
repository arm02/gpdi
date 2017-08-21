@extends('app')

    @section('header')

        <title>GPdI Kp.Makassar</title>

    @endsection

    @section('content')
<br>
<br>
    <center>
   <div class="carousel">
	@foreach($foto as $key)
    <a class="carousel-item" href="#one!" style="height:150px;width:150px;"s"><img src="{{url('images/'.$key->sampul)}}"></a>
    @endforeach
  	</div>
  	<h3>Welcome To GPdI Kampung Makassar</h3>
  	</center>

@endsection

@section('footer')
<script>
$(document).ready(function(){
	$('.carousel').carousel();
});
</script>

@endsection