<?php
$marks = 90;

if ($marks>=90)
{
	$grade = "A+";
}
else if($marks>80 and $marks<90)
{
	$grade = "A";
}
else if($marks>70 and $marks<80)
{
	$grade = "B";
}
else if($marks>60 and $marks<70)
{
	$grade = "C";
}
else
{
	$grade = "F";
}

echo "Student grade: $grade";
?>