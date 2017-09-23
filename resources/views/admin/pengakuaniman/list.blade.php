@extends('admin.dashboard') 

@section('header')
<title>Pengakuan Doa</title>
@endsection

@section('content')
<div class="container">
   <button class="btn btn-primary all" style="font-size: 13px;">Pengakuan Iman</button>
      <br>

      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>Kata Pengantar</th>
              <th colspan="1">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($katapengantar as $key)
          <tr>
            <td>{{substr(strip_tags($key->katapengantar),0,15)}}...</td>
            <td><a href="{{url('pengakuaniman/katapengantar/edit/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
          </tr>
           @endforeach
        </tbody>
      </table>
      <br>
      <br>
      <button class="btn btn-primary all">17 Pengakuan Iman</button> 
      <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('pengakuaniman/add')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></div>
      <br>

            <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>Isi</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>

        @foreach($pengakuaniman as $key)
          <tr>
            <td width="80%">{{substr(strip_tags($key->isi),0,70)}}...</td>
              <td><a href="{{url('pengakuaniman/edit/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
              <td><a href="{{url('pengakuaniman/delete/'.$key->id)}}"
            onclick="return confirm('Are you sure to delete {{$key->judul}}?')">
            <i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>


      </div>


@endsection