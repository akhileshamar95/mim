<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mim_easy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>

<body>



<!--right start-->
<div class="col-sm-9">
<h2 align="center">Signup Up</h2>
<?php
if(isset($_POST['signup']))
{
	 $name=$_POST['name'];	
	 $gender=$_POST['gender'];	
	 $contact=$_POST['contact'];
	 $address=$_POST['address'];
	 $photo=$_POST['photo'];
	 $user=$_POST['user'];
	
		
	/*INSERT INTO `mim_easy`(`sn_no`, `name`, `gender`, `contact`, `address`, `photo`, `user`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])*/
	
	$con=mysqli_connect("localhost","root","","mim");

	 $qry="INSERT INTO `mim_easy` (`name`,  `gender`, `contact`, `address`, `photo`,user) VALUES ('$name', '$gender', '$contact', '$address', '$photo', '$user')"; 
	
	
	 $result=mysqli_query($con,$qry);
	
	if($result==true)
	{
		echo '<div class="alert alert-success">
<strong>Success!</strong>Signup Successfully.
</div>';
	}
	else
	{
		echo '<div class="alert alert-danger">
<strong>Success!</strong>Signup failed.
</div>';
	}
	
	mysqli_close($con);
}

?>
<form method="post" action="#" >
<div class="form-group">

<div class="form-group">
<label>Name:</label>
<input type="text" class="form-control" name="name" placeholder="Enter Name">
</div>

<div class="form-group">
<label>contact:</label>
<input type="numbar" class="form-control" name="contact" placeholder="Enter Mobile">
</div>



<div class="form-group">
<label>Gender:</label><br>
MALE <input type="radio" name="gender" value="MALE"><br>
FEMALE <input type="radio" name="gender" value="FEMALE">
</div>

<div class="form-group">
<label>Address:</label>
<textarea name="address" class="form-control"></textarea>
</div>


    <div class="form-group">
<label>photo:</label>
     
        <td><input type="file" name="photo"  multiple accept="image/*"></td><br>
        </div>
        
<div class="form-group">
<label>User:Teacher/Student</label><br>
Teacher <input type="radio" name="user" value="student"><br>
Student <input type="radio" name="user" value="teacher">
</div>

<input type="submit" class="btn btn-success" value="SIGNUP" name="signup">
</form>




</body>
</html>
