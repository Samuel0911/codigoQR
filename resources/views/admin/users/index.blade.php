@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info" >Registrar nuevo usuario</a>

	<table class="table table-striped"> 
		<thead> 
			<th>ID</th>
			<th>Name</th>
			<th>Last Name</th>
			<th>Document ID</th>
			<th>Email</th>
			<th>Role</th>
			<th>Date</th>
			<th>Code</th>
			<th>&nbsp&nbsp&nbsp  Actions</th>
		</thead>
		<tbody>
			@foreach ($users as $user) 
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->lastName }}</td>
					<td>{{ $user->doc_id }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->role == 'admin')
							<span class="label label-danger">{{ $user->role }}</span>
						@else
							<span class="label label-primary">{{ $user->role }}</span>
						@endif
					</td>
					<td>{{ $user->date }}</td>
					<td>{{ $user->codigo_pin }}</td>
					<td>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class=" glyphicon glyphicon-wrench" aria-hidden="true" >&nbsp</span>Editar</a>
						
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que desea eliminar al usuario? ')" class="btn btn-danger"><span class=" glyphicon glyphicon-remove-circle" aria-hidden="true" >&nbsp</span>Eliminar</a> 		
					</td>
				</tr>			
				
			@endforeach
		</tbody>

	</table>

<body onload="update_qrcode()" >

<h1>QR Code Generator</h1>


<div class="section">

  <form name="qrForm">
    <span>TypeNumber:</span>
    <select name="t"></select>
    <span>ErrorCorrectLevel:</span>
    <select name="e">
      <option value="L">L(7%)</option>
      <option value="M" selected="selected">M(15%)</option>
      <option value="Q">Q(25%)</option>
      <option value="H">H(30%)</option>
    </select>
    <br/>
    
    <textarea name="msg" rows="10" cols="40">here comes the data for create the qr!</textarea>
   
     <br/>
    <input type="button" value="Generate QR" onclick="update_qrcode()" class="btn btn-primary"/>
    <a href=""><div id="qr"></div></a>
    <input type="button" value="Save code QR" >
  </form>

</div>


<script type="text/javascript">
!function() {
  var t = document.forms['qrForm'].elements['t'];
  for (var i = 1; i <= 40; i += 1) {
    var opt = document.createElement('option');
    opt.appendChild(document.createTextNode(''+ i) );
    opt.value = '' + i;
    t.appendChild(opt);
  }
  t.value = '4';
}();
</script>

	<div class="text-center">
		{!! $users->render() !!}
	</div>
@endsection