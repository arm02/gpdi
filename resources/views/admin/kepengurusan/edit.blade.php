@extends('admin.dashboard') 

@section('header')
<title>Edit Kepengurusan</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Edit Kepengurusan</h4>
<br>

<form action="{{url('kepengurusan/update/')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="gembala" 
                            value="{{$kepengurusan->gembala}}" required>
                            <label for="email">Gembala</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakilgembala" 
                            value="{{$kepengurusan->wakilgembala}}" required>
                            <label for="email">Wakkil Gembala</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="seketaris1" 
                            value="{{$kepengurusan->seketaris1}}" required>
                            <label for="email">Seketaris 1</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="seketaris2" 
                            value="{{$kepengurusan->seketaris2}}" required>
                            <label for="email">Seketaris 2</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="bendahara1" 
                            value="{{$kepengurusan->bendahara1}}" required>
                            <label for="email">Bendahara</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="bendahara2" 
                            value="{{$kepengurusan->bendahara2}}" required>
                            <label for="email">Wakil Bendahara</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="tataibadah" 
                            value="{{$kepengurusan->tataibadah}}" required>
                            <label for="email">Tata Ibadah</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakiltataibadah" 
                            value="{{$kepengurusan->wakiltataibadah}}" required>
                            <label for="email">Wakil Tata Ibadah</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="rumahtangga" 
                            value="{{$kepengurusan->rumahtangga}}" required>
                            <label for="email">Rumah Tangga</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakilrumahtangga" 
                            value="{{$kepengurusan->wakilrumahtangga}}" required>
                            <label for="email">Wakil Rumah Tangga</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="pengembangan" 
                            value="{{$kepengurusan->pengembangan}}" required>
                            <label for="email">Pengembangan dan Pembinaan Jemaat (P2J)</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakilpengembangan" 
                            value="{{$kepengurusan->wakilpengembangan}}" required>
                            <label for="email">Wakil Pengembangan dan Pembinaan Jemaat (P2J)</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="diakonia" 
                            value="{{$kepengurusan->diakonia}}" required>
                            <label for="email">Diakonia</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakildiakonia" 
                            value="{{$kepengurusan->wakildiakonia}}" required>
                            <label for="email">Wakil Diakonia</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="konseling" 
                            value="{{$kepengurusan->konseling}}" required>
                            <label for="email">Konseling</label>
                            </div>

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="wakilkonseling" 
                            value="{{$kepengurusan->wakilkonseling}}" required>
                            <label for="email">Wakil Konseling</label>
                            </div>



<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

<input type="hidden" name="_token"
   value="{{csrf_token()}}">

 <input type="hidden" name="id"
          value="{{$kepengurusan->id}}">
 </form> 

</div>




@endsection
@section('footer')
@endsection
