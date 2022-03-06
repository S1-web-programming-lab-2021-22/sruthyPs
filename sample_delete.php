<h1 style="text-align:center"><u>Delete</u></h1>
<?php
$con=mysqli_connect("localhost","root","","sample");
$id=$_GET["id"];
if($con)
{

$qry1="delete from studentname where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "<center><h2>Data Removed</center></h2><br>";
} 
}
?>