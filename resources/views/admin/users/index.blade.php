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

    <div id="qr"></div>

<?php 
	$Base64Img = "data:image/gif;base64,R0lGODdhUgBSAIAAAAAAAP///ywAAAAAUgBSAAAC/4yPqcvtD6OctNqLs968+w+G4kiW5mkC6sqyhsrAR9si8kvnVK4Hd/LjBQE2oWvyU8iWRN8q1uQVHclHderE4a5ZJw0L3UVr3SJXOyNjv+UI81g9htPy9PbZhrzxTPO4fle314f0xzfmF9jkJ2hIKDGICLRo1zC0Rna2EIkGVjnX2cWmqURZymiIGicJ6mY6iXqn+vq4+UpldIhGyCsZKVWY6zu8SywqfNuxCtVLivIJnXjsrLGnqMg1iudpXSjrdchWCrcN3W3RvbpMp2vejp6aB37KXjtUiwEcWnxZeT6/QZ+8f/0IltPDahIwct/GZUoICWK9h82SLZSIENvDff9t+mkMRc1frmL0QFK66CkiIHDiFB5kiTGgmokrr7nEJ/PeS50tpX3M0Gglz5k+YYZkZixlR0ft7CVD2Kuku59Ro+VE5pEmU5sesDZySC7sSzFCLcZTh6yoyp1mv6EVptbKO5jcepAcePKppbkthxaUmDUipp+t3MYrLHewUb1o+THW6xBp0be0xspbK5md0p4ApZLNO+frVM1LOeIKLDKrar4xBdM9ZjKbEMNHbdms2vAmxcPeXiu+a/I0b9ecnQa3Kq3mXsdBZ1+e5rz2XYFwn//aWOI6SpdSpVfQ3qMxLORyq1c1PtFxtbSw269m2PmCpoq5wQJunXg59Pq6OeJrJI7dZKC5g5Vp+mkT2WixsVcbJ9CJFgtpwolxG1Oo9WVZXLhUSBtb8HEVH4WvpUPUiHk1l89jcVVnWEa9tVKWEclB9hxSMvpGmlhUlbjWjcWFc1Z4PD5DZJFGHolkkkouyWSTTj4JZZQBFAAAOw==";

	//eliminamos data:image/png; y base64, de la cadena que tenemos
	//hay otras formas de hacerlo				   
	list(, $Base64Img) = explode(';', $Base64Img);
	list(, $Base64Img) = explode(',', $Base64Img);
	//Decodificamos $Base64Img codificada en base64.
	$Base64Img = base64_decode($Base64Img);
	//escribimos la información obtenida en un archivo llamado 
	//unodepiera.png para que se cree la imagen correctamente

	file_put_contents('unodepiera.gif', $Base64Img);	
	echo "<img src='unodepiera.gif' alt='unodepiera' />";

	document.getElementById('qr');
	 ?>



  </form>
<!--
	data:image/gif;base64,R0lGODdhUgBSAIAAAAAAAP///ywAAAAAUgBSAAAC/4yPqcvtD6OctNqLs968+w+G4kiW5mkC6sqyhsrAR9si8kvnVK4Hd/LjBQE2oWvyU8iWRN8q1uQVHclHderE4a5ZJw0L3UVr3SJXOyNjv+UI81g9htPy9PbZhrzxTPO4fle314f0xzfmF9jkJ2hIKDGICLRo1zC0Rna2EIkGVjnX2cWmqURZymiIGicJ6mY6iXqn+vq4+UpldIhGyCsZKVWY6zu8SywqfNuxCtVLivIJnXjsrLGnqMg1iudpXSjrdchWCrcN3W3RvbpMp2vejp6aB37KXjtUiwEcWnxZeT6/QZ+8f/0IltPDahIwct/GZUoICWK9h82SLZSIENvDff9t+mkMRc1frmL0QFK66CkiIHDiFB5kiTGgmokrr7nEJ/PeS50tpX3M0Gglz5k+YYZkZixlR0ft7CVD2Kuku59Ro+VE5pEmU5sesDZySC7sSzFCLcZTh6yoyp1mv6EVptbKO5jcepAcePKppbkthxaUmDUipp+t3MYrLHewUb1o+THW6xBp0be0xspbK5md0p4ApZLNO+frVM1LOeIKLDKrar4xBdM9ZjKbEMNHbdms2vAmxcPeXiu+a/I0b9ecnQa3Kq3mXsdBZ1+e5rz2XYFwn//aWOI6SpdSpVfQ3qMxLORyq1c1PtFxtbSw269m2PmCpoq5wQJunXg59Pq6OeJrJI7dZKC5g5Vp+mkT2WixsVcbJ9CJFgtpwolxG1Oo9WVZXLhUSBtb8HEVH4WvpUPUiHk1l89jcVVnWEa9tVKWEclB9hxSMvpGmlhUlbjWjcWFc1Z4PD5DZJFGHolkkkouyWSTTj4JZZQBFAAAOw==

-->

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