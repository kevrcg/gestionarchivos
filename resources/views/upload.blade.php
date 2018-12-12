@extends('layouts.master')

@section('contenido')

<h2>Cargar Archivo</h2>
<form method="post" id="frm" url="upload" files="true" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="Archivo"><b>Archivo: </b></label><input type="file" name="Archivo">
<input type="submit" value="Enviar" >
<p>{{$errors->first('Archivo')}}</p>
</form>
@endsection
