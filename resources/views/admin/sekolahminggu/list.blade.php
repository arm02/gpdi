@extends('admin.dashboard') 

@section('header')
<title>Sekolah Minggu</title>
@endsection

@section('content')
<div class="container">
	 <button class="btn btn-primary all">Kepengurusan</button>
      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>Ketua</th>
              <th>Seketaris</th>
              <th>Bendahara</th>
              <th>Seksi Acara</th>
              <th>Seksi Musik</th>
              <th>Seksi Konseling & Doa</th>
              <th>Paragraf Penjelas</th>
              <th colspan="1">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($kepengurusan as $key)
          <tr>
            <td>{{$key->ketua}}</td>
            <td>{{$key->seketaris}}</td>
            <td>{{$key->bendahara}}</td>
            <td>{{$key->seksiacara}}</td>
            <td>{{$key->seksimusik}}</td>
            <td>{{$key->seksikonselingdoa}}</td>
            <td>{{substr(strip_tags($key->motto),0,10)}}</td>
            <td><a href="{{url('sekolahminggu/edit/kepengurusan/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a></td>
          </tr>
           @endforeach
        </tbody>
      </table>
      <br>
      <button class="btn btn-primary all">Event / Acara</button> 
       <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('sekolahminggu/add/event')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>
      <br>

            <table class="striped" style="width: 800px;">
        <thead>
          <tr>
          		<th>No</th>
          		<th>Nama Event</th>
          		<th>Dilaksanakan</th>
              <th>Isi Event</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>

       	@foreach($event as $key)
          <tr>
          	<td>{{$key->id}}</td>
            <td>{{substr(strip_tags($key->nama_event),0,10)}}</td>
            <td>{{$key->tanggal}}</td>
            <td>{{substr(strip_tags($key->isi),0,15)}}...</td>
             <td><a href="{{url('sekolahminggu/edit/event/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a> 
             <td><a href="{{url('sekolahminggu/delete/event/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
          @endforeach
        </tbody>
      </table>
      <br>

        <button class="btn btn-primary all">Gallery</button> 
       <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('sekolahminggu/add/foto')}}" class="btn btn-primary all">
        <i class="material-icons">add</i></a></button>
      </div>

           <table class="striped" style="width: 800px;">
        <thead>
          <tr>
          	  <th>No</th>
              <th>Judul</th>
              <th>Foto</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>
          	@foreach($foto as $key)
          <tr>
          	<td>{{$key->id}}</td>
            <td>{{$key->judul}}</td>
            <td><img style="width: 20px;height: 20px;" src="{{url('images/'.$key->sampul)}}"></td>
              <td><a href="{{url('sekolahminggu/edit/foto/'.$key->id)}}"><i class="material-icons prefix" style="color: #1976d2;">edit</i></a> 
             <td><a href="{{url('sekolahminggu/delete/foto/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')"><i class="material-icons prefix" style="color: #1976d2;">delete</i></a>
          </tr>
             @endforeach
        </tbody>
      </table>


      </div>


@endsection