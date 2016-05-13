@extends('admin.template.main')

@section('title', 'Assitance Edit')

@section('content')
	{!!Form::model($company,['route'=>['company.update',$company->id],'method'=>'PUT'])!!}
			@include('admin.company.forms.cmp')
		{!!Form::submit('Update',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=>['company.destroy',$company->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop