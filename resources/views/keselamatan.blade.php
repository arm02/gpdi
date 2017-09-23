@extends('app')

    @section('header')

        <title>Kotak Keselamatan</title>

    @endsection

    @section('content')
<br>
<center>
     <button class="btn btn-primary all">Kotak Keselamatan GPdI Kp.Makassar</button>
     </center> 
<br>
<br>
@foreach ($katapengantar as $key)
<span style="font-size: 25px;">Kata Pengantar</span>
  <p>-&nbsp;{{$key->katapengantar}}</p>
  <span style="font-size: 25px;">-&nbsp;{{$key->ayat}}</span>
  <p>-&nbsp;{{$key->isi}}</p>
  <p>-&nbsp;{{$key->kalimatdoa}}</p>
  @endforeach
  <br>
    <form action="{{url('kotakkeselamatan/save')}}" method="POST">

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="nama" required>
                            <label for="email">Nama</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="email" required>
                            <label for="email">Email</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="notelp" required>
                            <label for="email">No Telp</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="informasi" required>
                            <label for="email">Informasi</label>
                            </div>

<center>
<button type="submit" class="btn btn-primary all">Request</button>
</center>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
      

    </form>
<br>
@endsection

@section('footer')
<script>
$(document).ready(function(){
	$('.carousel').carousel();
});
</script>

@endsection