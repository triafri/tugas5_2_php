<?php 
$input1 = ["Ayo", "Belajar"];
$input2 = ["Bersama", "Niomic"];

echo "<br>";
echo "<h1>Operator String</h1>";
echo "<table width = 500 border =1 >
		<tr align=center>
			<td>Input 1</td>
			<td>Input 2</td>
			<td>Hasil</td>
		</tr>
		<tr align=center>
			<td>".$input1[0]."</td>
			<td>".$input2[0]."</td>
			<td>".$input1[0]." ".$input2[0]."</td>
		</tr>
		<tr align=center>
			<td>".$input1[1]."</td>
			<td>".$input2[1]."</td>
			<td>".$input1[1]." ".$input2[1]."</td>
		</tr>
		<table>";

echo "<br> Gabungan : " .$input1[0]." ".$input2[0]." ".$input1[1]." ".$input2[1];
?>
