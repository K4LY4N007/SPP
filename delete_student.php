<?php
require('DBconnect.php');
$USN=$_GET['id'];
$sql="delete from SPP.student_details where USN='$USN'";
$result=mysqli_query($conn,$sql);
if($result === TRUE)
{
echo "<script type='text/javascript'>alert('Success')</script>";
header ( "Refresh:0.01; url=view_details.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=view_details.php", true, 303);

}
?>