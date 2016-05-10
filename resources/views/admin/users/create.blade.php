@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('lastName', 'Last Name') !!}
			{!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('doc_id', 'Document ID') !!}
			{!! Form::number('doc_id', null, ['class' => 'form-control', 'placeholder' => 'Document ID', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-Mail Address') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('role', 'Tipo') !!}
			{!! Form::select('role',['member' => 'Miembro', 'admin' => 'Admin'], null, ['class' => 'form-control'], 'placeholder', 'Select an option', 'required') !!}
		</div>


{!! $date = \Carbon\Carbon::now() !!}
		<div class="form-group">

			{!! Form::label('date', 'Date') !!}			
			{!! Form::date('date', $date ,['class' => 'form-control'], 'required') !!}
		</div>			


		<div class="form-group">

			{!! Form::label('start_date', 'Start Date') !!}

			{!! Form::date('start_date', $date->toW3cString(),['class' => 'form-control'], 'required') !!}
		</div>			
			


		<div class="form-group">			
			{!! Form::label('end_date', 'End Date') !!}

			{!! Form::date('end_date', $date->toW3cString(),['class' => 'form-control'], 'required') !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('codigo_pin', 'Code') !!}
			{!! Form::number('codigo_pin', null, ['class' => 'form-control', 'placeholder' => 'Code', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			
		</div>

	{!! Form::close() !!}


@endsection
