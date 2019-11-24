<?php
if(isset($_GET["uid"]))
{
	$sn_no=$_GET["uid"];
	
	$con=mysqli_connect("localhost","root","","mim");

     $sql="DELETE FROM mim_easy  WHERE sn_no='$sn_no'";
	 $data=mysqli_query($con,$sql);
	 echo $data;
	 mysqli_close($con);
	 if($data)
	 {
		 header('Location: superadmin.php');
		 }
	
	}


?>