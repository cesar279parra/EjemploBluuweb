@extends('plantilla')



@section('seccion')

<h1>Este es mi equipo de trabajo</h1>

@foreach($equipo as $item)
    <a href="{{  route('nosotros',$item)  }}" class="h4 text-danger">{{$item}}</a><br>
 
@endforeach 

@if(!empty($nombre))

@switch($nombre)

    @case($nombre=='Ignacio')
    <h2>El nombre es {{ $nombre }}:</h2>
    <p>Curriculum vitae {{ $nombre }}:</p>
    @break

    @case($nombre=='Juanito')
    <h2>El nombre es {{ $nombre }}:</h2>
    <p>Curriculum vitae {{ $nombre }}:</p>
    @break

    @case($nombre=='Pedrito')
    <h2>El nombre es {{ $nombre }}:</h2>
    <p>Curriculum vitae {{ $nombre }}:</p>
    @break

@endswitch


@endif


@endsection