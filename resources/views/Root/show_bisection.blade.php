@extends('Navbar')
@section('body')

	<table class="table table-borderless">
    <thead>
      <tr>
				<th><div align="center">XL</div></th>
				<th><div align="center">XR</div></th>
				<th><div align="center">XM</div></th>
				<th><div align="center">XMOLD</div></th>
				<th><div align="center">Error</div></th>
      </tr>
    </thead>
    <tbody>
				@foreach ($bisections as $row)
      <tr>
				<td><div align="center">{{$row['XL']}}</div></td>
				<td><div align="center">{{$row['XR']}}</div></td>
				<td><div align="center">{{$row['XM']}}</div></td>
				<td><div align="center">{{$row['XMOLD']}}</div></td>
				<td><div align="center">{{$row['Error']}} %</div></td>
      </tr>
    	@endforeach
    </tbody>
  </table>
@endsection
