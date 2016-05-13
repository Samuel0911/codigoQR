@extends('admin.template.main')

@section('title', 'Update Assistances')

@section('content')
{!! Form::model($assistance,['route' => ['admin.assistances.update', $assistance->id], 'method' => 'PUT']) !!}
		
		<div class="form-group">			
			{!! Form::label('date0', 'Check In') !!}		
			{!! Form::datetime('check_in', null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">			
			{!! Form::label('date1', 'Check Out') !!}	

			{!! Form::datetime('check_out', $dtout = \Carbon\Carbon::now() ,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">			
			{!! Form::label('date', 'Date') !!}			
			{!! Form::date('date', null ,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('work_hours', 'Work Hours') !!}
			{!! Form::number('work_hours' , null, ['class' => 'form-control', 'placeholder' => '0.0']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
			
		</div>



{!! Form::close() !!}
	
@endsection