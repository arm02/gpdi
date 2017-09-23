@extends('app')

    @section('header')

        <title>Jadwal Ibadah</title>

    @endsection

    @section('content')
<br><p></p>

    <div class="row">
    @foreach($jadwal as $key)
    	<div class="col s12 m4">
    		<ul class="collection with-header">
		        <li class="collection-header white-text"><b>{{$key->namajadwal}}
                </b></li>
		        <li class="collection-item"><i class="tiny material-icons">access_time</i>&nbsp;{{$key->pukul}}</li>
		        <li class="collection-item"><i class="tiny material-icons">today</i>&nbsp;{{$key->hari}}</li>
    		</ul>
    	</div>
    @endforeach    
    </div>
    
@endsection

@section('footer')

@endsection