@extends('admin.template.main')

@section('content')
	{!!Form::open(['route'=>'company.store', 'method'=>'POST'])!!}
			@include('admin.company.forms.cmp')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop