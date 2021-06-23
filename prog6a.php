<?php
$user = "boomika";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body style="background-color:blue;">
<h2 style="color:white;" ><center> <?php echo $user; ?>,Welcome to
Sample PHP Script</center> </h2>
<?php
print"<h3 style='color:white;' > This Program Displays Number Of count
hits</h3>";
print "<h3 style='color:white;' > REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
?>
<h3 style='color:white;' >
<?php echo "Total number of views: ".$hits[0];?>
</h3>
</body>
</html>