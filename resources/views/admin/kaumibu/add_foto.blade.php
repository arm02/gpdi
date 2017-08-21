@extends('admin.dashboard') 

@section('header')
<title>Add Gambar</title>
@endsection

@section('content')

<div class="container" style="width: 700px;">
<h4>Form Add Gallery</h4>
  <br>
  <form class="col s12" method="POST"
    action="{{url('kaumibu/save/foto')}}"
    enctype="multipart/form-data">
    <div class="input-field col s12">
    <input id="judul"  type="text" 
    class="validate" name="judul" required>
    <label for="judul">Judul</label>
    </div>
    <center>
      <div class="image-container bordered">
                            <div class="frame">
                              <img id="img" 
                              style="width: 200px;height: 200px;">
                            </div>
                     </center>
                        </div>
    <div class="file-field input-field col s12" style="width: 700px;" >
          <div class="btn all">
            <span>Image</span>
              <input name="sampul" id="sampul" type="file">
          </div>
          <div class="file-path-wrapper">
        <input  class="file-path validate" type="text">
      </div>
    </div>    

    <div class="right">
<button style="width: 200px;height: 50px;" type="submit" 
 class="btn btn-primary all">Save</button>
        </div>
        <input type="hidden" name="_token"
          value="{{csrf_token()}}">
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