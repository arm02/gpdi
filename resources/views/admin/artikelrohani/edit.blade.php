@extends('admin.dashboard') 

@section('header')
<title>Edit Artikel</title>
@endsection

@section('content')
<div class="contianer" style="width: 700px;">

<h4>Form Edit Artikel</h4>

<form action="{{url('artikelrohani/update/')}}" method="POST" enctype="multipart/form-data">



                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <input  type="text" name="judul" 
                            value="{{$artikelrohani->judul}}" required>
                            <label for="email">Judul</label>
                            </div>


                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="ayat" 
                            value="{{$artikelrohani->ayat}}" required>
                            <label for="email">Ayat</label>
                            </div>

                             <div class="input-field col s12 m12 l12">
                            <label for="email">Content</label>
                            <br>
                            <textarea id="content" value="{{$artikelrohani->isi}}"  
                            class="materialize-textarea" type="text" name="isi" required>{{$artikelrohani->isi}}</textarea>
                            <br>
                            </div>
                            

                             <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">date_range</i>
                            <input  type="text" name="sumber" 
                            value="{{$artikelrohani->sumber}}" required>
                            <label for="email">Sumber</label>
                            </div>                            

                             <div class="image-container bordered">
                         <div class="image-container bordered">
                         <center>
                            <div class="frame">
                              <img id="img" src="{{ url('images/'.$artikelrohani->sampul) }}" 
                              style="max-width:300px;">
                     </center>
                            </div>
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





<button style="width: 200px;height: 50px;margin-left: 480px;" type="submit" class="btn btn-primary all">Save</button>

<input type="hidden" name="_token"
   value="{{csrf_token()}}">
             <input type="hidden" name="id"
          value="{{$artikelrohani->id}}">
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

<script src="{{ url('js/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
  CKEDITOR_BASEPATH = "{{ url('/js/ckeditor/') }}";
  CKEDITOR.replace('content', {toolbar : 'standard',width : '99%',height : '300px'});
</script>


@endsection
