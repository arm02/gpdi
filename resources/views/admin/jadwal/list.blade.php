@extends('admin.dashboard') 

@section('header')
<title>Jadwal IBadah</title>
@endsection

@section('content')
<div class="container">
	 <button class="btn btn-primary all">Jadwal Ibadah</button>
          <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('jadwal/add')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>
      <br>
      <br>
      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>No</th>
              <th>Nama Jadwal</th>
              <th>Pukul</th>
              <th>Hari</th>
              <th colspan="1">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($jadwal as $key)
          <tr>
            <td>{{$key->id}}</td>
            <td>{{$key->namajadwal}}</td>
            <td>{{$key->pukul}}</td>
            <td>{{$key->hari}}</td>
            <td><a href="{{url('jadwal/edit/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
            <td><a style="margin-left: -90px;" href="{{url('jadwal/delete/'.$key->id)}}"
            onclick="return confirm('Are you sure to delete {{$key->judul}}?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
           @endforeach
        </tbody>
      </table>
      <br>


@endsection