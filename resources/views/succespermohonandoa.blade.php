@extends('app')

    @section('header')

        <title>Kotak Doa</title>

    @endsection

    @section('content')
    <center>
    <br>
    <br>
    <div class="card-panel">
        <div class="card-content">

        <p><b>Terima Kasih , Kami Segera Mendoakan anda, Tuhan Yesus Berserta Anda</b></p>
            
        </div>

            <div class="card-action">
            <form action="{{url('/')}}">
            <button class="btn btn-primary all">Back To Home
              </button>
              </form>
            </div>

    </div>
    </center>
@endsection

@section('footer')

@endsection