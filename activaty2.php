<?php 
if(isset ($_POST ['submit'])){
    $name=$_POST['namea'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];

$sql="insert into active (name,password,email)
values (' $name','$pass','$email')";
$conn=mysqli_connect('localhost','root','','activety')or die("connect error".mysqli_connect_error());

$resulte=mysqli_query($conn,$sql);

if($resulte)
{
    header('location:/projectphp/activaty.php');

}
else{
    die(mysqli_error($con));

}}?>