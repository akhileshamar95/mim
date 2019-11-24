<h1>superadmin approve</h1>
<html>
   <head>
   <title>select query</title>
   <style>
	 h1{
          color:white;
           font-size:40;
		  padding-left:30%;
		  background-color:#ff8b18;
        }
	
	  body {
	
  
	 
	 
	 }
	 center{ text-align:center }
</style>
     </head>
        <body>
		<form action="#">
		<table border="1px" width="100%" cellpadding="5px" cellspacing="3px">
		<h1>User data</h1>
		
		<tr>
		<th>Sno</th>
		<th>Name</th>
        <th>Photo</th>
        <th>gender</th>
		<th>contact</th>
        <th>address</th>
        <th>user</th>
		
        
        <th>Approve</th>
        <th>Delete</th>
        
        
		</tr>

<?php

$con=mysqli_connect("localhost","root","","mim");

$s="SELECT * FROM mim_easy";

$result=mysqli_query($con,$s);

$r=mysqli_num_rows($result);

   if($r>0)
{
	while($row=mysqli_fetch_array($result))
	{
		?>	
		<tr>
        <td><?php echo $row ['sn_no']?></td>
		<td><?php echo $row ['name']?></td>
        <td><a href="uploads/img/<?php echo $row['photo'] ?>" target="_blank">view file</a></td>
		<td><?php echo $row['gender']?></td>
		<td><?php echo $row ['contact']?></td>
        <td><?php echo $row ['address']?></td>
        <td><?php echo $row ['user']?></td>
        <!--
        <td><a href="editdata.php?uid=<?php echo $row ['sn_no']?>">Edit</a></td> -->
        <td><a href="#">Approve</a></td>
        <td><a href="delete.php?uid=<?php echo $row ['sn_no']?>">Delete</a></td>
		</tr>
		
		<?php
		}
		 
	
}
?>

		</table>
		
   </form>
  </body>
</html>