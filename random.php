<html>
<head><title>FIND WINNER</title></head>

<table >
 	<tr><td colpand="10" ><h1>FIND WINNER</h1></td></tr>
	<tr colspand="2">
	<td width="500px">
		<?php
echo file_get_contents( "name.txt"  );
?>
	</td>
	<td valign="top" align="left"><a href="http://rand.naseath.asia/random.php"><h2>FIND AGAIN</a>
	<br/><br/>
		<?php
$lines = file('name.txt');

echo $lines[array_rand($lines)];
?>:-)
</h2>
	</td>
	</tr>
	<tr><td valign="top" align="left"><a href="http://rand.naseath.asia">BACK</a></td></tr>
</table>
</html>
