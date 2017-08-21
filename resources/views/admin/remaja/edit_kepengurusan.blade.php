@extends('admin.dashboard') 

@section('header')
<title>Edit Kepengurusan</title>
@endsection

@section('content')
<div class="container" style="width: 700px;">


<form action="{{url('remaja/update/kepengurusan')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input  type="text" name="ketua" 
                            value="{{$kepengurusan->ketua}}" required>
                            <label for="email">Ketua</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input  type="text" name="wakil" 
                            value="{{$kepengurusan->wakil}}" required>
                            <label for="email">Wakil</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input  type="text" name="seketaris" 
                            value="{{$kepengurusan->seketaris}}" required>
                            <label for="email">Seketaris</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input  type="text" name="bendahara" 
                            value="{{$kepengurusan->bendahara}}" required>
                            <label for="email">Bendahara</label>
                            </div>

<center>
<button style="width: 200px;height: 50px;margin-left: 450px;" type="submit" class="btn btn-primary all">Save</button>
</center>
<input type="hidden" name="_token"
   value="{{csrf_token()}}">

 <input type="hidden" name="id"
          value="{{$kepengurusan->id}}">
 </form> 

</div>


@endsection