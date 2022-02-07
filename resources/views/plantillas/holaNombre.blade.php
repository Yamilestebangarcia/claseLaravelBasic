{{-- documentacion de blade https://styde.net/laravel-6-doc-plantillas-blade/ --}}

@extends("plantillas.plantilla")
@section("titulo")
hola
@endsection

@section("contenido")
{{-- <h1>hola:{{$nombre}} desde blade</h1> --}}

{{-- <h1>
@if ($nombre ==="yamil")
    soy yo
@elseif (strlen($nombre)===2)
    no soy nadie
@else
    {{$nombre}}
@endif
</h1> --}}
<ul>
    @foreach($nombre as $item)
<li>{{$item}}</li>
@endforeach
</ul>


@endsection