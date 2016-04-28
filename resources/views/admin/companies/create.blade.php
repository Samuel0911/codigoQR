@extends('admin.template.main')

@section('title', 'Crear Company')

@section('content')
	{!! Form::open(['route' => 'admin.companies.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('phone', 'Telephone Number') !!}
			{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telephone number']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('address', 'Address') !!}
			{!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('website', 'Website') !!}
			{!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'www.company.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('country', 'Country') !!}
			{!! Form::select('country', null, ['class' => 'form-control', 'placeholder' => 'Country', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('city', 'City') !!}
			{!! Form::select('city', null, ['class' => 'form-control', 'placeholder' => 'City', 'required']) !!}
		</div>


	{!! Form::close() !!}

@endsection