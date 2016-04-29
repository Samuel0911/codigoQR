@extends('admin.template.main')

@section('title', 'Create Assistances')

@section('content')
{!! Form::open(['route' => 'admin.assistances.store', 'method' => 'POST']) !!}
		
		<div class="form-group">			
			{!! Form::label('check_in', 'Check In') !!}		
			{!! Form::date('check_in', $date->toTimeString() ,['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">			
			{!! Form::label('check_out', 'Check Out') !!}	

			{!! Form::date('check_out', $date1->toTimeString() ,['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">			
			{!! Form::label('date', 'Date') !!}			
			{!! Form::date('date', $date ,['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">
			{!! Form::label('work_hours', 'Work Hours') !!}
			{!! Form::number('work_hours' , null, ['class' => 'form-control', 'placeholder' => '0.0', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			
		</div>



{!! Form::close() !!}
	
@endsection