@extends('Navbar')
@section('body')
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Bisection Method</h3>
	<br>
	<h5><p>การแบ่งครึ่งช่วง (Bisection method) คือ การแบ่งออกเป็นสองส่วนเท่ากันในคณิตศาสตร์เป็นวิธีการหารากที่ซ้ำ ๆ</h5>
	<h5>-<br>การแบ่งออกเป็นสองส่วนเท่ากันช่วงเวลาและจากนั้นเลือกช่วงย่อยซึ่งรากต้องอยู่ในแนวแกน X</h5>
	<h5><br>สำหรับการประมวลผลต่อไปเป็นวิธีที่ง่ายและมีประสิทธิภาพ แต่ก็ยังค่อนข้างช้า</h5>
	<h5><br>ด้วยเหตุนี้มันจึงมักใช้เพื่อหาแนวทางในการแก้ปัญหาโดยประมาณซึ่งใช้เป็นจุดเริ่มต้นของวิธีการบรรจบกันอย่างรวดเร็วมากขึ้น</h5>
	<h5><br>วิธีการนี้เรียกว่าวิธีการลดช่วงเวลา วิธีการค้นหาแบบไบนารี</p></h5>
</div>
<br>
<br>
<div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" align="center" style="background-color:#f1f1f1">
	<h3 style="text-align: center" class="text-danger">Exemple</h3>
	<br>
	<h5><p>จงใช้วิธี Bisection เพื่อคำนวณหาค่า x^3-x^2+2 โดยกำหนดค่าขอบเขตเริ่มต้น ระหว่าง 2 และ 3</h5>
	
<?php 
	$EPSILON = 0.01; 
	$XMOLD = 0;

	function func($x) 
	{ 
		return $x * $x * $x - $x * $x + 2; //x^3 - x^2 + 2
	} 

	// Prints root of func(x) 
	// with error of EPSILON 
	function bisection($XL, $XR, $XMOLD) 
	{ 
		global $EPSILON; 
		if (func($XL) * func($XR) >= 0) 
		{ 
			echo "You have not assumed " . "right a and b","\n"; 
			return; 
		} 

		$XM = 0; 
		$ERROR = 100;
		$XMOLD = 0;
		while (($XR - $XL) >= $EPSILON) 
		{ 
			$XMOLD = $XM;
			// Find middle point 
			$XM = ($XL + $XR) / 2; 

			// Check if middle 0
			// point is root 
			$ERROR = abs(($XM-$XMOLD)/$XM);
			if (func($XM) == 0.0) 
				break; 

			// Decide the side to 
			// repeat the steps 
			else if (func($XM) * func($XL) < 0) 
				$XR = $XM; 
			else
				$XL = $XM; 

			$dataInsert = [
				'XL'=>$XL,
				'XR'=>$XR,
				'XM'=>$XM,
				'XMOLD'=>$XMOLD,
				'Error'=>$ERROR
			];
			// dd($dataInsert);
			\App\Bisection::insert($dataInsert);
		} 
		echo "The value of root is : " , $XM ,"The error is : ",$ERROR; 
		return $XM;
	} 

	$XL =-2; 
	$XR = 3;
	$XMOLD = 0;
	$XM = bisection($XL, $XR, $XMOLD); 
?>
</div>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="get" action="{{url('/show/Bisection')}}" align="center">
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
