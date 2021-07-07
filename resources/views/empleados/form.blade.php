<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  
  {{ $Modo=='crear' ? '':'Modificar'}} <br>


  <div class="alert alert-primary" role="alert">
    Los campos con asterisco(*) son obligatorios
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="Nombre">{{'Nombre Completo *'}}</label>
    <div class="col-sm-10">
      <input class="form-control {{ $errors->has('Nombre')?'is-invalid':''}} " type="text" name="Nombre" id="Nombre" placeholder="Nombre completo del empleado" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}"><br>
     {!! $errors->first('Nombre','<div class="invalid-feedback">:message </div>') !!}
    
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="Correo">{{'Correo Electrónico *'}}</label>
    <div class="col-sm-10">
      <input  class="form-control {{ $errors->has('Correo')?'is-invalid':''}}" type="email" name="Correo" id="Correo" placeholder="Correo Electrónico" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo')}}"><br>
      {!! $errors->first('Correo','<div class="invalid-feedback">:message </div>') !!}
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" for="Sexo">{{'Sexo *'}}</label>
    <div class="col-sm-10">
      <input type="radio"  id="Masculino" name="Sexo"  value="Masculino" > Masculino <br>
      <input type="radio"  id="Femenino" name="Sexo" value="Femenino" > Femenino 
      {!! $errors->first('Sexo','<div class="invalid-feedback">:message </div>') !!}
    </div>
  </div>

  <div class="form-group row">
   <label  class="col-sm-2 col-form-label" for="Area">{{'Area *'}}</label>
   <div class="col-sm-10">
      <select class="form-control" name="Area" id="Area">
        <option value=""> Selecione...</option>
        <option value="Ventas"> Ventas</option>
        <option value="Calidad">Calidad</option>
        <option value="Producción">Producción</option>
      </select>
      {!! $errors->first('Area','<div class="invalid-feedback">:message </div>') !!}
    </div>
  </div>

  <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="Descripción">{{'Descripción *'}}</label>
    <div class="col-sm-10">
      <textarea class="form-control" heigth="500px" name="Descripción" id="Descripción" rows=3 cols=20  placeholder="Descripción  de la experiencia del empleado"  value="{{ isset($empleado->Descripción)?$empleado->Descripción:''}}" > </textarea> <br>
      {!! $errors->first('Descripción','<div class="invalid-feedback">:message </div>') !!}
    </div>
  </div>

  <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="Boletin"> </label>
      <div class="col-sm-10">
               <input  type="radio"  id="Si" name="Boletin"  value="Si" > Deseo Recibir Boletin Informativo

      </div>
  </div>
              
  <div class="form-group row">
      <label class="col-sm-2 col-form-label"  for="Roles">{{'Roles *'}}</label>
      <div class="col-sm-10">
                                <input type="radio"  id="1" name="Roles"  value="1" > Profesional De Proyectos-Desarrollo   <br>                           
                                <input type="radio" id="2" name="Roles" value="2" > Gerente Estratégico <br>
                                <input type="radio" id="3" name="Roles" value="3" > Auxiliar Administrativo
                                {!! $errors->first('Roles','<div class="invalid-feedback">:message </div>') !!}
       </div>
  </div>
  <input width="20%"class="btn btn-success " type="submit" value="{{ $Modo=='crear' ? 'Guardar':'Modificar Empleado'}}">
  <a  class="btn btn-danger" href="{{ url('empleados') }}">Regresar</a>

