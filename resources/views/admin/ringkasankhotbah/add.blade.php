@extends('admin.dashboard') 

@section('header')
<title>Add Ringkasan</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Add Ringkasan</h4>

<form action="{{url('ringkasankhotbah/save/')}}" method="POST">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="judul" required>
                            <label for="email">Judul</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="ayat" required>
                            <label for="email">Ayat</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">content_copy</i>
                            <select name="pendeta">
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
                            <label for="email">Dibawakan Oleh</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">content_copy</i>
                            <textarea class="materialize-textarea" type="text" name="isi" required></textarea>
                            <label for="email">Content</label>
                            </div>

                      <div class="image-container bordered">
                            <div class="frame">
                            <center>
                              <img id="img" 
                              style="max-width:350px;max-height: 250px;">
                              </center>
                            </div>
                     </center>
                   </div>
            <div class="file-field input-field col s12">
          <div class="btn all">
            <span>Edit Image</span>
              <input name="sampul" id="sampul" type="file">
          </div>
          <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>   

<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

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
