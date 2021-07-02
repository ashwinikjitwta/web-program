<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {
color: black;
font-size: 40px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body {
background-color: #1100BB;
}
</style>
<p> <?php echo "The server time is" .date(" h: i : s A") ."<br>";
  echo "Today is " . date("Y/m/d")."<br>"; 
  echo "Today is " . date("Y.m.d")."<br>";
echo "Today is " . date("Y-m-d")."<br>";
 echo "Today is sunday";?></p>

</head>
</html>