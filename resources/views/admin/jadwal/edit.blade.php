@extends('admin.dashboard') 

@section('header')
<title>Edit Jadwal</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Edit Jadwal</h4>

<form action="{{url('jadwal/update/')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="namajadwal" 
                            value="{{$jadwal->namajadwal}}" required>
                            <label for="email">Judul Jadwal</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="pukul" value="
                            {{$jadwal->pukul}}" class="timepicker" required>
                            <label for="email">Jam Pelaksanaan</label>
                            </div>

                         <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">content_copy</i>
                            <select name="hari" value="{{$jadwal->hari}}">
                              <option value="{{$jadwal->hari}}" disabled selected>{{$jadwal->hari}}
                              </option>
                              <option value="Senin">Senin</option>
                              <option value="Selasa">Selasa</option>
                              <option value="Rabu">Rabu</option>
                              <option value="Kamis">Kamis</option>
                              <option value="Jumat">Jumat</option>
                              <option value="Sabtu">Sabtu</option>
                              <option value="Minggu">Minggu</option>
                            </select>
                            <label for="email">Dilaksanakan Hari</label>
                            </div>



<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

<input type="hidden" name="_token"
   value="{{csrf_token()}}">

 <input type="hidden" name="id"
          value="{{$jadwal->id}}">
 </form> 

</div>




@endsection
@section('footer')
@endsection
