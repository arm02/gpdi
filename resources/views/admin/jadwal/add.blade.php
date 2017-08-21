@extends('admin.dashboard') 

@section('header')
<title>Add Jadwal</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Add Jadwal</h4>

<form action="{{url('jadwal/save/')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="namajadwal" required>
                            <label for="email">Judul Jadwal</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="pukul" 
                            class="timepicker" required>
                            <label for="email">Dilaksanakan Pukul</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">content_copy</i>
                            <select name="hari">
                              <option value="" disabled selected>Choose your option
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
 </form> 

</div>




@endsection
@section('footer')

@endsection
