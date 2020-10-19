<!--Javascript-->
<script type="text/javascript">
 function showHide() {
   var div = document.getElementById("Start");
   if (div.style.display == 'none') {
     div.style.display = '';
   }
   else {
     div.style.display = 'none';
   }
 }
</script>

<!--PHP Script-->
<?php
ini_set('max_execution_time', 10);
$text_test = "Debug.";
$text1 = "Two numbers are correct and well placed.";
$text2 = "Two numbers are correct and wrong placed.";
$text3 = "Nothing is correct.";
$text4 = "One number is correct and well placed";

/*
function get_buttons(){
	$str='';
	$btns=array(
		1=>'Start',
		2=>'Check',
	);
	while(list($k,$v)=each($btns)){
		$str.='<input type="submit" value="'.$v.'" name="btn_'.$k.'"id="btn_'.$k.'" />';
	}
	return $str;
}
*/

function get_buttons(){
	$str='';
	$btns='Start';
	$str.='<input type="submit" value="'.$btns.'" name="'.$btns.'" id="Start" />';
	if($btns='Start'){
		$btns='Roll';
	}
	return $str;
}
	
if (isset($_POST['Start'])) {
	
	//$y='Next';
	$a; $b; $c; $d; $e;
	settype($answer, "integer");
	
	//Answer
	while($answer!=5){
		$rand_main = rand(11111, 99999);
		$a = substr($rand_main, 0, 1);
		$b = substr($rand_main, 1, 1);
		$c = substr($rand_main, 2, 1);
		$d = substr($rand_main, 3, 1);
		$e = substr($rand_main, 4, 1);
		
		if(!in_array($a, array($b,$c, $d, $e), false)){
			$aa=1;
		}
		else $aa=0;
		
		if(!in_array($b, array($a,$c, $d, $e), false)){
			$bb=1;
		}
		else $bb=0;
		
		if(!in_array($c, array($b,$a, $d, $e), false)){
			$cc=1;
		}
		else $cc=0;
		
		if(!in_array($d, array($b,$c, $a, $e), false)){
			$dd=1;
		}
		else $dd=0;
		
		if(!in_array($e, array($b,$c, $d, $a), false)){
			$ee=1;
		}
		else $ee=0;
		
		$answer=$aa+$bb+$cc+$dd+$ee;
	
	}
	
	//Line 1 hints, variable declaration
	$a1; $b1; $c1; $d1; $e1;
	settype($add1, "integer");
	settype($answer1, "integer");
	settype($total1, "integer");
	
	//Line2 hints, variable declaration
	$a2; $b2; $c2; $d2; $e2;
	settype($add2, "integer");	
	settype($add2a, "integer");
	settype($answer2, "integer");
	settype($total2, "integer");

	//Line 3 hints, variable declaration
	$a3; $b3; $c3; $d3; $e3;
	settype($add3, "integer");	
	settype($answer3, "integer");
	settype($total3, "integer");
	
	//Line4 hints, variable declaration
	$a4; $b4; $c4; $d4; $e4;
	settype($add4, "integer");
	settype($answer4, "integer");
	settype($total4, "integer");
	
	//Line 5 hints, variable declaration
	$a5; $b5; $c5; $d5; $e5;
	settype($add5, "integer");
	settype($answer5, "integer");
	settype($total5, "integer");
	
	//Calculation variable declaration
	settype($calculate, "string");
	settype($res6, "integer");
	
	//Line 1 hints calculation
	while($total1!= 1){		
		
		$rand_a1 = rand(0, 9);
		$rand_b1 = rand(0, 9);
		$rand_c1 = rand(0, 9);
		$rand_d1 = rand(0, 9);
		$rand_e1 = rand(0, 9);
		
		if($rand_a1==$a){
		$a1=1;
		}
		else $a1=0;
	
		if($rand_b1==$b){
			$b1=1;
		}
		else $b1=0;
	
		if($rand_c1==$c){
			$c1=1;
		}
		else $c1=0;
	
		if($rand_d1==$d){
			$d1=1;
		}
		else $d1=0;
	
		if($rand_e1==$e){
			$e1=1;
		}
		else $e1=0;
		
		if(!in_array($rand_a1, array($rand_b1,$rand_c1, $rand_d1, $rand_e1, $b, $c, $d, $e),false)){
			$a1a=1;
		}
		else $a1a=0;
		
		if(!in_array($rand_b1, array($rand_a1,$rand_c1, $rand_d1, $rand_e1, $a, $c, $d, $e),false)){
			$b1b=1;
		}
		else $b1b=0;
		
		if(!in_array($rand_c1, array($rand_a1,$rand_b1, $rand_d1, $rand_e1, $a, $b, $d, $e),false)){
			$c1c=1;
		}
		else $c1c=0;
		
		if(!in_array($rand_d1, array($rand_a1,$rand_b1, $rand_c1, $rand_e1, $a, $b, $c, $e),false)){
			$d1d=1;
		}
		else $d1d=0;
		
		if(!in_array($rand_e1, array($rand_a1,$rand_b1, $rand_c1, $rand_d1, $a, $b, $c, $d),false)){
			$e1e=1;
		}
		else $e1e=0;
		
		$answer1=$a1a+$b1b+$c1c+$d1d+$e1e;
		
		$add1=$a1+$b1+$c1+$d1+$e1;
		
		if($answer1==5 && $add1==2){
			$total1=1;
		}
		else $total1=0;
		
	}
	
	//Line 2 hints calculation
	while($total2!= 1){		
		
		$rand_a2 = rand(0, 9);
		$rand_b2 = rand(0, 9);
		$rand_c2 = rand(0, 9);
		$rand_d2 = rand(0, 9);
		$rand_e2 = rand(0, 9);
		
		//Returns true when value is in the answer array
		//$add2=2
		if(in_array($rand_a2, array($a, $b, $c, $d, $e),false)){
		$a2=1;
		}
		else $a2=0;
	
		if(in_array($rand_b2, array($a, $b, $c, $d, $e),false)){
			$b2=1;
		}
		else $b2=0;
	
		if(in_array($rand_c2, array($a, $b, $c, $d, $e),false)){
			$c2=1;
		}
		else $c2=0;
	
		if(in_array($rand_d2, array($a, $b, $c, $d, $e),false)){
			$d2=1;
		}
		else $d2=0;
	
		if(in_array($rand_e2, array($a, $b, $c, $d, $e),false)){
			$e2=1;
		}
		else $e2=0;
		
		//Returns true when value is not in horizontal array
		//$answer2=5
		if(!in_array($rand_a2, array($rand_b2,$rand_c2, $rand_d2, $rand_e2),false)){
			$a2a=1;
		}
		else $a2a=0;
		
		if(!in_array($rand_b2, array($rand_a2,$rand_c2, $rand_d2, $rand_e2),false)){
			$b2b=1;
		}
		else $b2b=0;
		
		if(!in_array($rand_c2, array($rand_a2,$rand_b2, $rand_d2, $rand_e2),false)){
			$c2c=1;
		}
		else $c2c=0;
		
		if(!in_array($rand_d2, array($rand_a2,$rand_b2, $rand_c2, $rand_e2),false)){
			$d2d=1;
		}
		else $d2d=0;
		
		if(!in_array($rand_e2, array($rand_a2,$rand_b2, $rand_c2, $rand_d2),false)){
			$e2e=1;
		}
		else $e2e=0;
		
		//Returns true when value is not in its vertical column of the answer box
		if($rand_a2!=$a){
		$a2aa=1;
		}
		else $a2aa=0;
	
		if($rand_b2!=$b){
			$b2bb=1;
		}
		else $b2bb=0;
	
		if($rand_c2!=$c){
			$c2cc=1;
		}
		else $c2cc=0;
	
		if($rand_d2!=$d){
			$d2dd=1;
		}
		else $d2dd=0;
	
		if($rand_e2!=$e){
			$e2ee=1;
		}
		else $e2ee=0;
		
		$answer2=$a2a+$b2b+$c2c+$d2d+$e2e;
		
		$add2=$a2+$b2+$c2+$d2+$e2;
		
		$add2a=$a2aa+$b2bb+$c2cc+$d2dd+$e2ee;
		
		if($answer2==5 && $add2==2 && $add2a==5){
			$total2=1;
		}
		else $total2=0;
		
	}	
	
	//Line 3 hints calculation
	while($total3!=1){
		
		$rand_a3 = rand(0, 9);
		$rand_b3 = rand(0, 9);
		$rand_c3 = rand(0, 9);
		$rand_d3 = rand(0, 9);
		$rand_e3 = rand(0, 9);
		
		if(!in_array($rand_a3, array($a, $b, $c, $d, $e),false)){
		$a3=1;
		}
		else $a3=0;
	
		if(!in_array($rand_b3, array($a, $b, $c, $d, $e),false)){
			$b3=1;
		}
		else $b3=0;
	
		if(!in_array($rand_c3, array($a, $b, $c, $d, $e),false)){
			$c3=1;
		}
		else $c3=0;
	
		if(!in_array($rand_d3, array($a, $b, $c, $d, $e),false)){
			$d3=1;
		}
		else $d3=0;
	
		if(!in_array($rand_e3, array($a, $b, $c, $d, $e),false)){
			$e3=1;
		}
		else $e3=0;
		
		if(!in_array($rand_a3, array($rand_b3, $rand_c3, $rand_d3, $rand_e3, $a, $b, $c, $d, $e),false)){
			$a3a=1;
		}
		else $a3a=0;
		
		if(!in_array($rand_b3, array($rand_a3,$rand_c3, $rand_d3, $rand_e3, $a, $b, $c, $d, $e),false)){
			$b3b=1;
		}
		else $b3b=0;
		
		if(!in_array($rand_c3, array($rand_a3,$rand_b3, $rand_d3, $rand_e3, $a, $b, $c, $d, $e),false)){
			$c3c=1;
		}
		else $c3c=0;
		
		if(!in_array($rand_d3, array($rand_a3,$rand_b3, $rand_c3, $rand_e3, $a, $b, $c, $d, $e),false)){
			$d3d=1;
		}
		else $d3d=0;
		
		if(!in_array($rand_e3, array($rand_a3,$rand_b3, $rand_c3, $rand_d3, $a, $b, $c, $d, $e),false)){
			$e3e=1;
		}
		else $e3e=0;
		
		$answer3=$a3a+$b3b+$c3c+$d3d+$e3e;
		
		$add3=$a3+$b3+$c3+$d3+$e3;
		
		if($answer3==5 && $add3==5){
			$total3=1;
		}
		else $total3=0;
		
	}	
	
	//Line 4 hints calculation
	while($total4!= 1){
		
		$rand_a4 = rand(0, 9);
		$rand_b4 = rand(0, 9);
		$rand_c4 = rand(0, 9);
		$rand_d4 = rand(0, 9);
		$rand_e4 = rand(0, 9);
		
		if($rand_a4==$a){
		$a4=1;
		}
		else $a4=0;
	
		if($rand_b4==$b){
			$b4=1;
		}
		else $b4=0;
	
		if($rand_c4==$c){
			$c4=1;
		}
		else $c4=0;
	
		if($rand_d4==$d){
			$d4=1;
		}
		else $d4=0;
	
		if($rand_e4==$e){
			$e4=1;
		}
		else $e4=0;
		
		if(!in_array($rand_a4, array($rand_b4,$rand_c4, $rand_d4, $rand_e4, $b, $c, $d, $e),false)){
			$a4a=1;
		}
		else $a4a=0;
		
		if(!in_array($rand_b4, array($rand_a4,$rand_c4, $rand_d4, $rand_e4, $a, $c, $d, $e),false)){
			$b4b=1;
		}
		else $b4b=0;
		
		if(!in_array($rand_c4, array($rand_a4,$rand_b4, $rand_d4, $rand_e4, $a, $b, $d, $e),false)){
			$c4c=1;
		}
		else $c4c=0;
		
		if(!in_array($rand_d4, array($rand_a4,$rand_b4, $rand_c4, $rand_e4, $a, $b, $c, $e),false)){
			$d4d=1;
		}
		else $d4d=0;
		
		if(!in_array($rand_e4, array($rand_a4,$rand_b4, $rand_c4, $rand_d4, $a, $b, $c, $d),false)){
			$e4e=1;
		}
		else $e4e=0;
		
		$answer4=$a4a+$b4b+$c4c+$d4d+$e4e;
		
		$add4=$a4+$b4+$c4+$d4+$e4;
		
		if($answer4==5 && $add4==1){
			$total4=1;
		}
		else $total4=0;
		
	}
	
	//Line 5 hints calculation
	while($total5!= 1){
		
		$rand_a5 = rand(0, 9);
		$rand_b5 = rand(0, 9);
		$rand_c5 = rand(0, 9);
		$rand_d5 = rand(0, 9);
		$rand_e5 = rand(0, 9);
		
		if($rand_a5==$a){
		$a5=1;
		}
		else $a5=0;
	
		if($rand_b5==$b){
			$b5=1;
		}
		else $b5=0;
	
		if($rand_c5==$c){
			$c5=1;
		}
		else $c5=0;
	
		if($rand_d5==$d){
			$d5=1;
		}
		else $d5=0;
	
		if($rand_e5==$e){
			$e5=1;
		}
		else $e5=0;
		
		if(!in_array($rand_a5, array($rand_b5,$rand_c5, $rand_d5, $rand_e5, $b, $c, $d, $e),false)){
			$a5a=1;
		}
		else $a5a=0;
		
		if(!in_array($rand_b5, array($rand_a5,$rand_c5, $rand_d5, $rand_e5, $a, $c, $d, $e),false)){
			$b5b=1;
		}
		else $b5b=0;
		
		if(!in_array($rand_c5, array($rand_a5,$rand_b5, $rand_d5, $rand_e5, $a, $b, $d, $e),false)){
			$c5c=1;
		}
		else $c5c=0;
		
		if(!in_array($rand_d5, array($rand_a5,$rand_b5, $rand_c5, $rand_e5, $a, $b, $c, $e),false)){
			$d5d=1;
		}
		else $d5d=0;
		
		if(!in_array($rand_e5, array($rand_a5,$rand_b5, $rand_c5, $rand_d5, $a, $b, $c, $d),false)){
			$e5e=1;
		}
		else $e5e=0;
		
		$answer5=$a5a+$b5b+$c5c+$d5d+$e5e;
		
		$add5=$a5+$b5+$c5+$d5+$e5;
		
		if($answer5==5 && $add5==2){
			$total5=1;
		}
		else $total5=0;
		
	}
	
	//echo 'You rolled a '.$rand_main."<br>";
	echo 'CRACK THE CODE<br/>';
	echo '<img src="lock.png" alt="lock" style="width:52px;height:52px;"><br/><br/>';
	echo '<input type="text" name="text_1" size="1" maxlength="1">-';
	echo '<input type="text" name="text_2" size="1" maxlength="1">-';
	echo '<input type="text" name="text_3" size="1" maxlength="1">-';
	echo '<input type="text" name="text_4" size="1" maxlength="1">-';
	echo '<input type="text" name="text_5" size="1" maxlength="1">';
	echo '<br/>';
	echo '<br/><br/>HINTS<br/>';
	
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_a1;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_b1;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_c1;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_d1;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_e1;echo '">';
	echo '<br />';echo $text1; echo '<br/><br/>';
			
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_a2;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_b2;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_c2;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_d2;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_e2;echo '">';
	echo '<br />';echo $text2; echo '<br/><br/>';
	
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_a3;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_b3;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_c3;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_d3;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_e3;echo '">';
	echo '<br/>';echo $text3; echo '<br/><br/>';
	
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_a4;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_b4;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_c4;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_d4;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_e4;echo '">';
	echo '<br/>';echo $text4; echo '<br/><br/>';
	
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_a5;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_b5;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_c5;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_d5;echo '">-';
	echo '<input type="text" name="text" size="1" maxlength="1" readonly="readonly" value="';echo $rand_e5;echo '">';
	echo '<br/>';echo $text1; echo '<br/><br/><br/>';
	//echo "Answer is $calculate <br/>";
	//echo '<button type="submit" name="answer" value="answer">Answer</button>';
	
	/*
	if(isset($_GET['answer'])){
		$result1 = $_GET{'text_1'};
		$result2 = $_GET{'text_2'};
		$result3 = $_GET{'text_3'};
		$result4 = $_GET{'text_4'};
		$result5 = $_GET{'text_5'};
		$res1; $res2; $res3; $res4; $res5;
		if($result1==$a){
			$res1=1;
		}
		else $res1=0;
		
		if($result2==$b){
			$res2=1;
		}
		else $res2=0;
		
		if($result3==$c){
			$res3=1;
		}
		else $res3=0;
		
		if($result4==$d){
			$res4=1;
		}
		else $res4=0;
		
		if($result5==$e){
			$res5=1;
		}
		else $res5=0;
		
		$res6=$res1+$res2+$res3+$res4+$res5;
		
	}
	
	if($res6==5){
		$calculate='Right';
	}
	else $calculate='Wrong';
	*/
	
}


?>

<!--HTML Output-->
<form action="index.php" method="POST" >
	
	<div id="buttons" onsubmit="showHide(); return true;"><?php echo get_buttons(); ?></div>
	
</form>

