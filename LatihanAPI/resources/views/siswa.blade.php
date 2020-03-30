<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Laporan Excel Pada Laravel</title>
</head>
<body>
    <div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
		</center>
		
		<a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($siswa as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->nama}}</td>
					<td>{{$s->nis}}</td>
					<td>{{$s->alamat}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>