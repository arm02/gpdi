@extends('admin.dashboard') 

@section('header')
<title>Ringkasan Khotbah</title>
@endsection

@section('content')
<div class="container">
	 <button class="btn btn-primary all" style="font-size: 12px;">Ringkasan Khotbah</button>
          <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('ringkasankhotbah/add')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>
      <br>
      <br>
      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Ayat</th>
              <th>Dibawakan Oleh</th>
              <th>Isi</th>
              <th>Sampul</th>
              <th>Posted By</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($ringkasankhotbah as $key)
          <tr>
            <td>{{$key->id}}</td>
            <td>{{substr(strip_tags($key->judul),0,10)}}...</td>
            <td>{{$key->ayat}}</td>
            <td>{{$key->pendeta}}</td>
            <td>{{substr(strip_tags($key->isi),0,15)}}...</td>
            <td><img style="width: 20px;height: 20px;" src="{{url('images/'.$key->sampul)}}"></td>
            <td>{{\App\User::find($key->id_user)['name']}}</td>
            <td><a href="{{url('ringkasankhotbah/edit/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
            <td><a href="{{url('ringkasankhotbah/delete/'.$key->id)}}"
            onclick="return confirm('Are you sure to delete {{$key->judul}}?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
           @endforeach
        </tbody>
      </table>
      <br>


@endsection