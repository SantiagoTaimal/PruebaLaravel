@extends('layouts.app')

@section('content')

<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container">

<h1 class="display-4">Crear Empleado</h1>


@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}} </li>
    @endforeach
    </ul>

@endif

<form action="{{url ('/empleados')}}"  class=" form-horizontal"method="POST" >
{{ csrf_field()}}
@include('empleados.form',['Modo'=>'crear'])

</form>

</div>
@endsection
