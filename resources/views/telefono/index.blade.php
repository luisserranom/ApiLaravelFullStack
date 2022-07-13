@extends('layout.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ( $telefonos as $tel)


                <div class="card" style="width: 18rem;">
                    <img src="{{$tel['url_img']}}" class="card-img-top" alt="...">
                    <div class="{{$tel['marca']}}">
                    <h5 class="card-title">{{$tel['nombre_modelo']}}</h5>
                    <h5 class="card-title">{{$tel['precio']}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              @endforeach

        </div>
    </div>
</div>
@endsection
@push('javascript')
<script>
    $(document).ready( function () {
        $('#tabla_user').DataTable();



    } );
</script>
@endpush
