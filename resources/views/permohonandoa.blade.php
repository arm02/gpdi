@extends('app')

    @section('header')

        <title>Kotak Doa</title>

    @endsection

    @section('content')
<br>
<center>
     <button class="btn btn-primary all">Kotak Doa GPdI Kp.Makassar</button>
     </center> 
<br>
<br>
@foreach ($katapengantar as $key)
  <span style="font-size: 25px;">-&nbsp;{{$key->ayat}}</span>
  <p>-&nbsp;{{$key->katapengantar}}</p>
  @endforeach
  <br>
    <form action="{{url('kotakdoa/save')}}" method="POST">

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
                            <input  type="text" name="alamat" required>
                            <label for="email">Alamat</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="umur" required>
                            <label for="email">Umur</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <textarea class="materialize-textarea"  type="text" name="isi" required></textarea>
                            <label for="email">Isi Doa</label>
                            </div>

<center>
<button type="submit" class="btn btn-primary all">Request Doa Anda</button>
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