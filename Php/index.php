<?php
	$x = 12;
	$y = 10;
	$z = $x + $y;
	
	function global_test(){
		global $z,$x;
		$m = 12;
		$n = $z + $m;
		
		echo $n;
	}
	
	function print_hello(){
		print "hello world";
	}
	
	function add($x,$y){
		
		$sum = $x + $y;
		return $sum;
	}
	
	
	$name="Tanvir Tanvir";
	echo strlen($name)."<br>";
	
	$pos = strpos($name,"i");
	$pos2 = strpos($name,"i",$pos);
	echo "$pos <> $pos2 <br>";
	if($z > 50){
		
		$m = 15;
	}
	
	$a = 10;
	$b = "10";
	
	if($a === $b){
		echo "Same";
	}
	else{
		echo "not same";
	}
	
	
	echo "<h1>Hello Php $z</h1>";
	echo '<h1>Hello Php'.$z.'</h1>';
?>
<html>
	<head></head>
	<body>
		This is plain html
		We have access from private network and calculated result is <?php echo $z;?> and m= <?php echo $m;?>
	
		<?php
			$n =9;
			$o = 10;
		?>
		this is end and calculated result is <?php echo $n+$o;?> <br>
		
		This is a function call
		<?php
			print_hello();
		?>
		<br>
		
		This is a addition of 10 and 12 = <?php echo ADd(10,12);?> <br>
		This is test of global <?php global_test();?>
	</body>
</html>