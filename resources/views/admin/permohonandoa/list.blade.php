@extends('admin.dashboard') 

@section('header')
<title>Permohonan Doa</title>
@endsection

@section('content')
<div class="container">
   <button class="btn btn-primary all" style="font-size: 13px;">Permohonan Doa</button>
      <br>

      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>Kata Pengantar</th>
              <th>Ayat</th>
              <th colspan="1">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($permohonandoa as $key)
          <tr>
            <td>{{substr(strip_tags($key->katapengantar),0,15)}}...</td>
            <td>{{$key->ayat}}</td>
            <td><a href="{{url('permohonandoa/edit/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
          </tr>
           @endforeach
        </tbody>
      </table>
      <br>
      <br>
      <button class="btn btn-primary all">Kotak Doa</button> 
      <br>

            <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>Nama</th>
              <th>Email</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>

        @foreach($kotakdoa as $key)
          <tr>
            <td>{{$key->nama}}</td>
            <td>{{substr(strip_tags($key->email),0,5)}}...</td>
              <td><a style="font-size: 12px;margin-right: -35px;" href="{{url('permohonandoa/kotakdoa/detail/'.$key->id)}}" class="btn btn-primary all">Lihat</a></td>
             <td><a style="font-size: 12px;margin-right: -40px;" href="{{url('permohonandoa/kotakdoa/delete/'.$key->id)}}" class="btn btn-primary all">Approve</a></td>
             <td><a style="font-size: 12px;" href="{{url('permohonandoa/kotakdoa/delete/'.$key->id)}}" class="btn btn-primary all">Decline</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>


      </div>


@endsection