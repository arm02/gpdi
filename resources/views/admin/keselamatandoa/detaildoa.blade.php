@extends('admin.dashboard')
@section('header')
<title>Detail Keselamatan</title>
@endsection
@section('content')
<h4 class="card-title" style="font-size: 23px;"><b>Detail Kotak Keselamatan</b></h4>
      <div class="row">
        <div class="col s12 m6">
          <div class="card" style="width: 850px;max-height: 500px;">
            <div class="card-content">
              <p  style="font-size: 25px;">Nama Pemohon : {{$kotakkeselamatan->nama}}</p><br>
              <p style="font-size: 20px;">Email : {{$kotakkeselamatan->email}}</p>
              <p style="font-size: 20px;">No.Telp : {{$kotakkeselamatan->notelp}}</p><br>
              <p style="font-size: 15px;">Informasi : {{$kotakkeselamatan->informasi}}</p><br>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('footer')
@endsection