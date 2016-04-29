@extends('admin.template.main')

@section('title', 'Lista de Asistencia')

@section('content')
	<a href="{{ route('admin.assistances.create') }}" class="btn btn-info" >Registrar Asistencia</a>

	<table class="table table-striped"> 
		<thead> 
			<th>ID</th>
			<th>Check IN</th>
			<th>Check Out</th>
			<th>Date</th>
			<th>Work Hours</th>			
			<th>&nbsp&nbsp&nbsp  Actions</th>
		</thead>
		<tbody>
			@foreach ($assistances as $assistance) 
				<tr>
					<td>{{ $assistance->id }}</td>
					<td>{{ $assistance->check_in }}</td>
					<td>{{ $assistance->check_out }}</td>
					<td>{{ $assistance->date }}</td>
					<td>{{ $assistance->work_hours }}</td>
					
					<td>
						<a href="{{ route('admin.assistances.edit', $assistance->id) }}" class="btn btn-warning"><span class=" glyphicon glyphicon-wrench" aria-hidden="true" >&nbsp</span>Editar</a>
						
						<a href=" {{ route('admin.assistances.destroy', $assistance->id) }} " onclick="return confirm('Seguro que desea eliminar al usuario? ')" class="btn btn-danger"><span class=" glyphicon glyphicon-remove-circle" aria-hidden="true" >&nbsp</span>Eliminar</a> 		
					</td>
				</tr>			
				
			@endforeach
		</tbody>

	</table>
	<div class="text-center">
		{!! $assistances->render() !!}
	</div>
	
@endsection