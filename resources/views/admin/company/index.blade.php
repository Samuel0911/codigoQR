@extends('admin.template.main')

@section('title', 'Companies List')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
	
	<a href="{!!URL::to('/company/create')!!}" class="btn btn-primary" >Add Company</a>
	
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Address</th>
			<th>Actions</th>
		</thead>
		@foreach($companies as $company)
		<tbody>
			<td>{{$company->name}}</td>
			<td>{{$company->address}}</td>
			<td>
				{!!link_to_route('company.edit', $title = 'Edit', $parameters = $company->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
@endsection