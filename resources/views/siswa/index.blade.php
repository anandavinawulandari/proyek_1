
@extends('layouts.master2')


@section('title','APLIKASI SANGGAR TARI KILISUCI')

        
@section('content')
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
      <div class="row ">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading " >
                    <center>
                    <h4>Terimakasih, pendaftaran Anda telah berhasil.</h4>
                    </center>

                    <a href="{{url('/welcome')}}" class="btn btn-success">Kembali</a></div>
            </div>
                           </div>
            </div>
        </div>

    </div>
  
</div>

@stop
@push('scripts')
<script>
$(function() {
$('#table-nilai').DataTable();
});

</script>

@endpush

