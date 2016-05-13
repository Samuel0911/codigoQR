@extends('admin.template.main')

@section('title', 'Create Assistances')

@section('content')
{!! Form::open(['route' => 'admin.assistances.store', 'method' => 'POST']) !!}
		
		<div class="form-group">			
			{!! Form::label('date0', 'Check In') !!}		
			{!! Form::datetime('check_in', $dtin = \Carbon\Carbon::now() ,['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">			
			{!! Form::label('date1', 'Check Out') !!}	
			{!! Form::datetime('check_out', null ,['class' => 'form-control'], 'required') !!}
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
			{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
		</div>



{!! Form::close() !!}
	
@endsection