@extends('Navbar')
@section('body')
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Newton-Ralphson Method</h3>
	<br>
	<h5><p>เป็นวิธีที่นิยมมากที่สุดในการหารากของสมการ เนื่องจากรวดเร็ว</h5>
</div>
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Exemple</h3>
	<br>
	<h5><p>จงใช้วิธี Newton-Ralphson Method เพื่อคำนวณหาค่า x^3-x^2+2 โดยกำหนดค่าเริ่มต้น คือ x = 2</h5>

<?php
  function func($x){ return $x * $x * $x - $x * $x + 2; }//x^3 - x^2 +2
  function derivfunc($x){ return 3*$x*$x-2*$x; } //ฟังค์ชั่น diff

  $EPSILON = 0.01;
  $Error = 1;
  $XO = 2;
  $iteration = 0;
  while($Error>=$EPSILON){
    $XN = $XO-(func($XO) / derivFunc($XO));;
    $Error = abs(($XN-$XO)/$XN);
    $XO = $XN;
    $iteration = $iteration+1;
    echo "<br>iteration = ",$iteration," XN = ",$XN, " Error = ",$Error;

    $dataInsert = [
      'XN' => $XN,
      'Iteration' => $iteration,
      'Error' => $Error
    ];
    App\Newton_Raspson::insert($dataInsert);
  }
?>
</div>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="get" action="{{url('/show/NewtonRarpson')}}" align="center">
				<div class="form-group">
					<h5 style="text-align: center">คำนวณหารากของสมการ</h5><br>
					<button type="submit" class="btn btn-outline-danger">ยืนยัน</button>
					<!-- <input type="submit" class="btn btn-primary"/> -->
				</div>
            </form>
		</div>
	</div>
</div>
@endsection
