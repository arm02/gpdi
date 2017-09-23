@extends('admin.dashboard') 

@section('header')
<title>Add Gambar</title>

<style>
          .thumb {
            height: 75px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
@endsection

@section('content')

<div class="container" style="width: 700px;">
<h4>Form Add Gallery</h4>
  <br>
  <br>
  <form class="col s12" method="POST"
    action="{{url('multimedia/save/foto')}}"
    enctype="multipart/form-data">
    <center>
      <div class="image-container bordered">
                            <div class="frame" >
                              <output id="list"></output>
                            </div>
                     </center>
                        </div>
    <div class="file-field input-field col s12" style="width: 700px;">
          <div class="btn all">
            <span>Image</span>
              <input multiple="true" name="foto[]" accept=".PNG, .JPEG, .JPG" 
              id="sampul" 
              type="file">
          </div>
          <div class="file-path-wrapper">
        <input  class="file-path validate" type="text">
      </div>
    </div>    

    <div class="right">
<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

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

<script>
  function handleFileSelect(evt) {      
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {      

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();


      // Closure to capture the file information.
      reader.onload = (function(theFile) {        
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img id="sampul" class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
          document.getElementById("list").style.display = "block";
          document.getElementById('cancel').style.display = "none";  
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('sampul').addEventListener('change', handleFileSelect, false);


</script>

@endsection