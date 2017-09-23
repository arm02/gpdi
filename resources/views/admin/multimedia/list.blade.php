@extends('admin.dashboard') 

@section('header')
<title>Multimedia</title>
@endsection

@section('content')
<div class="container">
	
        <button class="btn btn-primary all">Gallery</button> 
       <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('multimedia/add/foto')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>

           <table class="striped" style="width: 800px;">
        <thead>
          <tr>
          	  <th>No</th>
              <th>Foto</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>
          	@foreach($foto as $key)
          <tr>
          	<td>{{$key->id}}</td>
            <td><img style="width: 20px;height: 20px;" src="{{url('images/'.$key->foto)}}"></td>
             <td><a href="{{url('multimedia/delete/foto/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
             @endforeach
        </tbody>
      </table>

<br>
<br>
       <button class="btn btn-primary all">Video</button> 
       <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('#s')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>

           <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Video</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Coming Soon</td>
            <td>Coming Soon</td>
            <td>Coming Soon</td>
              <td><a href="{{url('#')}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a> 
             <td><a href="{{url('#')}}"
            onclick="return confirm('Are you sure to delete?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
        </tbody>
      </table>


      </div>


@endsection