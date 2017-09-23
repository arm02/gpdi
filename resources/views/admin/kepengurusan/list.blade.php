@extends('admin.dashboard') 

@section('header')
<title>Kepengurusan</title>
@endsection

@section('content')
<div class="container">
  @foreach($kepengurusan as $key)
   <button class="btn btn-primary all">Kepengurusan</button>
          <div class="input-field col s3" style="margin-top: -36px; margin-left: 700px;">
        <a href="{{url('kepengurusan/edit/'.$key->id)}}" class="btn btn-primary all">
        <i class="material-icons">edit</i></a></button>
      </div>
      <br>
      <br>
      <table class="striped" style="width: 800px;">
        <thead>
          <tr>
              <th>No</th>
              <th>Jabatan</th>
              <th>Nama</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Gembala</td>
            <td>{{$key->gembala}}</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Wakil Gembala</td>
            <td>{{$key->wakilgembala}}</td>
          </tr>
           <tr>
            <td>3</td>
            <td>Seketaris 1</td>
            <td>{{$key->seketaris1}}</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Seketaris 2</td>
            <td>{{$key->seketaris2}}</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Bendahara</td>
            <td>{{$key->bendahara1}}</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Wakil Bendahara</td>
            <td>{{$key->bendahara2}}</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Tata Ibadah</td>
            <td>{{$key->tataibadah}}</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Wakil Tata Ibadah</td>
            <td>{{$key->wakiltataibadah}}</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Rumah Tangga</td>
            <td>{{$key->rumahtangga}}</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Wakil Rumah Tangga</td>
            <td>{{$key->wakilrumahtangga}}</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Pengembangan dan Pembinaan Jemaat (P2J)</td>
            <td>{{$key->pengembangan}}</td>
          </tr>
          <tr>
            <td>12</td>
            <td>Wakil Pengembangan dan Pembinaan Jemaat (P2J)</td>
            <td>{{$key->wakilpengembangan}}</td>
          </tr>
          <tr>
            <td>13</td>
            <td>Diakonia</td>
            <td>{{$key->diakonia}}</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Wakil Diakonia</td>
            <td>{{$key->wakildiakonia}}</td>
          </tr>
          <tr>
            <td>15</td>
            <td>Konseling</td>
            <td>{{$key->konseling}}</td>
          </tr>
          <tr>
            <td>16</td>
            <td>Wakil Konseling</td>
            <td>{{$key->wakilkonseling}}</td>
          </tr>


           @endforeach
        </tbody>
      </table>
      <br>


@endsection