@extends('admin.template.main')
@section('content')
	{!!Form::model($company,['route'=>['admin.company.update',$company->id],'method'=>'PUT'])!!}
			@include('admin.company.forms.cmp')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['admin.company.destroy',$company->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop