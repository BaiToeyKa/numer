@extends('Navbar')
@section('body')
<br>


		<table class="table table-borderless">
    		<thead>
      			<tr class="w3-green">
                  <th><div align="center">XL</div></th>
				    <th><div align="center">XR</div></th>
				    <th><div align="center">XM</div></th>
				    <th><div align="center">XMOLD</div></th>
				    <th><div align="center">Error</div></th>
      			</tr>
    		</thead>
			@foreach ($false_position as $row)
    		<tbody>
      			<tr>
                    <td><div align="center">{{$row['XL']}}</div></td>
					<td><div align="center">{{$row['XR']}}</div></td>
					<td><div align="center">{{$row['XM']}}</div></td>
					<td><div align="center">{{$row['XMOLD']}}</div></td>
					<td><div align="center">{{$row['Error']}} %</div></td>
				</tr>
      			</tr>
    		</tbody>
			@endforeach
  		</table>
    
@endsection
