@extends('Navbar')
@section('body')
<br>
<h3 style="text-align: center" class="text-danger">คำนวณหารากของสมการ</h3><br>
	<div>
		<table class="table table-hover" width="50" class="w3-table w3-striped">
    		<thead>
      			<tr class="w3-green">
					<th><div align="center">XL</div></th>
					<th><div align="center">XR</div></th>
					<th><div align="center">XM</div></th>
					<th><div align="center">XMOLD</div></th>
					<th><div align="center">Error</div></th>
      			</tr>
    		</thead>
			@foreach ($bisections as $row)
    		<tbody>
      			<tr>
					<td><div align="center">{{$row['XL']}}</div></td>
					<td><div align="center">{{$row['XR']}}</div></td>
					<td><div align="center">{{$row['XM']}}</div></td>
					<td><div align="center">{{$row['XMOLD']}}</div></td>
					<td><div align="center">{{$row['Error']}} %</div></td>
      			</tr>
    		</tbody>
			@endforeach
  		</table>
	</div>
@endsection