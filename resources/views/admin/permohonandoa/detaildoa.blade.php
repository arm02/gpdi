@extends('admin.dashboard')
@section('header')
<title>Detail Doa</title>
@endsection
@section('content')
<h4 class="card-title"><b>Detail Kotak Doa</b></h4>
      <div class="row">
        <div class="col s12 m6">
          <div class="card" style="width: 850px;max-height: 500px;">
            <div class="card-content">
              <p  style="font-size: 25px;">Nama Pemohon : {{$permohonandoa->nama}}</p><br>
              <p style="font-size: 20px;">Email : {{$permohonandoa->email}}</p>
              <p style="font-size: 20px;">Alamat : {{$permohonandoa->alamat}}</p>
              <p style="font-size: 20px;">Umur : {{$permohonandoa->umur}}</p><br>
              <p style="word-wrap:break-word">Isi Doa : <br>{{$permohonandoa->isi}}</p>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('footer')
@endsection