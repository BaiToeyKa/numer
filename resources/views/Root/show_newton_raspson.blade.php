@extends('Navbar')
@section('body')
<br>
<h3 style="text-align: center" class="text-danger">คำนวณหารากของสมการ</h3><br>
	<div>
		<table class="table table-hover" width="50" class="w3-table w3-striped">
    		<thead>
      			<tr class="w3-green">
                    <th><div align="center">Iteration</div></th>
				    <th><div align="center">XN</div></th>
				    <th><div align="center">Error</div></th>
      			</tr>
    		</thead>
			@foreach ($newton_raspson as $row)
    		<tbody>
      			<tr>
                    <td><div align="center">{{$row['Iteration']}}</div></td>
					<td><div align="center">{{$row['XN']}}</div></td>
					<td><div align="center">{{$row['Error']}}</div></td>
      			</tr>
    		</tbody>
			@endforeach
  		</table>
	</div>
@endsection
