@extends('Navbar')
@section('body')
<br>
<h3 style="text-align: center" class="text-danger">คำนวณหารากของสมการ</h3><br>
	<div>
		<table class="table table-hover" width="50" class="w3-table w3-striped">
    		<thead>
      			<tr class="w3-green">
                  	<th><div align="center">Iteration</div></th>
					<th><div align="center">X ใหม่</div></th>
				</tr>
    		</thead>
			@foreach ($one_point_iteration as $row)
    		<tbody>
      			<tr>
				  	<td><div align="center">{{$row['Iteration']}}</div></td>
					<td><div align="center">{{$row['XN']}}</div></td>
				</tr>
    		</tbody>
			@endforeach
  		</table>
    </div>
@endsection
