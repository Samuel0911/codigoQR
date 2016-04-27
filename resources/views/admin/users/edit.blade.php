@extends('admin.template.main')

@section('title', 'Editar Usuario ' . $user->name)

@section('content')
	
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('lastName', 'Last Name') !!}
			{!! Form::text('lastName', $user->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('doc_id', 'Document ID') !!}
			{!! Form::number('doc_id', $user->doc_id, ['class' => 'form-control', 'placeholder' => 'Document ID', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-Mail Address') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('role', 'Tipo') !!}
			{!! Form::select('role',['member' => 'Miembro', 'admin' => 'Admin'], $user->role, ['class' => 'form-control'], 'placeholder', 'Select an option', 'required') !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('codigo_pin', 'Code') !!}
			{!! Form::number('codigo_pin', $user->codigo_pin, ['class' => 'form-control', 'placeholder' => 'Code', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			
		</div>

	{!! Form::close() !!}

@endsection