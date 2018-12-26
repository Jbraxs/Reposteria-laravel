@extends('layouts.app')
@section('content')

<h4 class="text-center">Editar Pastel: {{ $pastel->nombre }}</h4>
{!!Form::model($pastel, ['route'=> ['pasteles.update', $pastel],'method' => 'PUT'])!!}

@include('pasteles.partials.fields')

<button type="sumbit" class="btn btn-success btn-block"> Guardar Cambios</button> 
{!! Form::close()!!}
@endsection