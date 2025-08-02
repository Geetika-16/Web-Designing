<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["g"];
$d=$_POST["e"];
$e=$_POST["p"];
$f=$_POST["m"];
$g=$_POST["dob"];
$h=$_POST["s"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"NewOne");
$sql="insert into class(n,a,g,e,p,m,dob,s)values('$a','$b','$c','$d','$e','$f','$g','$h')";
mysqli_query($con,$sql);
echo("Thanks for register here & check your mail confirmation will send you !!!! or more queries contact!! 96545451124");

include("register.php");
mysqli_close($con);
?>