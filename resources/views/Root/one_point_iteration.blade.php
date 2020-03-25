@extends('Navbar')
@section('body')
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Simple One-Point Iteration</h3>
	<br>
	<h5><p>วิธีการง่ายที่สุดในการหารากของสมการ </h5>
	<h5>-<br>ทําได้โดยการจัดเรียงสมการใหม่ในรูป x = g(x)</h5>
	<h5><br>คือ ย้าย ค่า x บางส่วนมาอยู่ด้านซ้ายของสมการและทําการประมาณค่าใหม่จากค่าตั้งต้น</h5>
	<h5><br>ทําเช่นนี้เรื่อยไปจนได้คําตอบที่มีค่า Precision ที่ต้องการ</h5>
	<h5><br>สังเกตว่าบางครั้งการจัดเรียงสมการใหม่สามารถกระทําได้หลายวิธีและจะมีผลต่อการ Converge และผลลัพธ์ที่ได้</p></h5>
</div>
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Exemple</h3>
	<br>
	<h5><p>จงใช้วิธี One-Point Iteration เพื่อคำนวณหาค่า x^2-3x-4 โดยกำหนดค่าเริ่มต้น คือ 5</h5>
	
<?php
	$EPSILON = 0.01;
    $Error = 1;
    $XO = 5;
    $iteration = 0;
	while($Error>=$EPSILON){
        $XN = func($XO);
        $Error = abs(($XN-$XO)/$XN);
        $XO = $XN;
        $iteration = $iteration+1;
        echo "<br>iteration = ",$iteration," XN = ",$XN;

        $dataInsert = [
  			'XN'=>$XN,
            // 'Iteration'=>$iteration
  		];

  		\App\One_Point_Iteration::insert($dataInsert);
    }

    function func($x)
	{
		return 4/($x-3); //x^2-3x-4
	}
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="get" action="{{url('/show/OnePointIteration')}}" align="center">
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
