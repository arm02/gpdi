@extends('admin.dashboard') 

@section('header')
<title>Keselamatan</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Edit Keselamatan</h4>

<form action="{{url('keselamatan/update/')}}" method="POST"  enctype="multipart/form-data">


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <textarea class="materialize-textarea"  
                            type="text" name="katapengantar" 
                            required>{{$keselamatan->katapengantar}}
                            </textarea>
                            <label for="email">Kata Pengantar</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="ayat" 
                            value="{{$keselamatan->ayat}}" required>
                            <label for="email">Ayat</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <textarea class="materialize-textarea"  
                            type="text" name="isi" 
                            required>{{$keselamatan->isi}}
                            </textarea>
                            <label for="email">Isi</label>
                            </div>


                            
                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <textarea class="materialize-textarea"  
                            type="text" name="kalimatdoa" 
                            required>{{$keselamatan->kalimatdoa}}
                            </textarea>
                            <label for="email">Kalimat Doa</label>
                            </div>


                             

<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

<input type="hidden" name="_token"
   value="{{csrf_token()}}">

   <input type="hidden" name="id"
   value="{{$keselamatan->id}}">
 </form> 
</div>




@endsection
@section('footer')

<script type="text/javascript">
  
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#sampul").change(function(){
    readURL(this);
});
</script>


@endsection
