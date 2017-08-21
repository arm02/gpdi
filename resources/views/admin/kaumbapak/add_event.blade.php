@extends('admin.dashboard') 

@section('header')
<title>Add Event</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Add Event</h4>

<form action="{{url('kaumbapak/save/event')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="nama_event" required>
                            <label for="email">Judul Event</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="tanggal" class="datepicker" required>
                            <label for="email">Tanggal Pelaksanaan</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">content_copy</i>
                            <textarea class="materialize-textarea" type="text" name="isi" required></textarea>
                            <label for="email">Isi Event</label>
                            </div>



<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

<input type="hidden" name="_token"
   value="{{csrf_token()}}">
 </form> 

</div>




@endsection
@section('footer')
@endsection
