<?php
$marks = 40;

if ($marks>=60)
{
	$grade = "First Class";
}
else if($marks>=45)
{
	$grade = "Second Class";
}
else if($marks>=33)
{
	$grade = "Pass Class";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>