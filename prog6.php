<?php
$user = "YourName";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<div>
	<h3> <?php echo $user; ?>,Welcome to Sample PHP Script </h3>
</div>
<?php
print "<h3> This Program displays the number page visits </h3>";
print "<h4> REFRESH PAGE </h4>";
$name="counter.txt";

$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;

$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);

print "Total number of views: ".$hits[0];
?>
</body>
<style>
	body{
		background-color: #1100BB;
		color: white;
	}
	div{
		text-align: center;
	}
</style>
</html>