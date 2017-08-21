@extends('admin.dashboard') 

@section('header')
<title>Add Gambar</title>
@endsection

@section('content')
<div class="container" style="width: 700px;">
<h4>Form Edit Gallery</h4>
  <br>
  <form class="col s12" method="POST"
    action="{{url('remaja/update/foto')}}"
    enctype="multipart/form-data">

    <div class="input-field col s12">
    <input id="judul" type="text" 
    class="validate" name="judul"
    value="{{$foto->judul}}">
    <label for="judul">Judul</label>
    </div>
    <tr>
      <label>Sampul</label>
      <br>
          <center>
          <td>
          <div class="image-container bordered">
                            <div class="frame">
                              <img id="img" src="{{ url('images/'.$foto->sampul) }}" 
                              style="max-width:300px;">
                            </div>
                     </center>
                        </div>
                        
                        <div class="file-field input-field col s12" style="width: 700px;">
          <div class="btn all">
            <span>Edit Image</span>
              <input name="sampul"  id="sampul" type="file">
          </div>
          <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </tr>
  <center>
<button style="width: 200px;height: 50px;" type="submit" 
 class="btn btn-primary all">Save</button>
</center>

        <input type="hidden" name="_token"
          value="{{csrf_token()}}">
          <input type="hidden" name="id"
          value="{{$foto->id}}">
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