<?php
$conn=mysqli_connect("localhost","root","","facebook");
if(!$conn)
{
    die("Database Connection Failed".mysqli_error($conn));
}
      

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
     if (isset($_POST['submit'])) {
     	$firstname=$_POST['firstname'];
     	$lastname=$_POST['lastname'];
     	$username=$_POST['username'];
     	$password=$_POST['password'];
     	$email=$_POST['email'];
     	$mobileno=$_POST['mobileno'];
     	$entercity=$_POST['entercity'];

     $query="insert into filldata(`firstname`,`lastname`,`username`,`password`,`email`,`mobileno`,`city`) values ('".$firstname."','".$lastname."','".$username."','".$password."','".$email."','".$mobileno."','".$entercity."')";


       
     	$run=mysqli_query($conn,$query);
     	//mysqli_error($conn);
     	if($run){
     		echo "data inserted";
     	}else{
     			echo "Error";
     	}
     
     }

	?>
	<center><h1>Registration From</h1></center>
	<div class="form">
		<form action="" method="POST">
			<center>
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="firstname" ></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lastname" ></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" ></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="text" name="password" ></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" ></td>
					</tr>
					<tr>
						<td>Mobile No:</td>
						<td><input type="text" name="mobileno"  ></td>
					</tr>
					<tr>
						<td>Enter City</td>
						<td><input type="text" name="entercity" value=""  ></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" style="background-color: green; padding: 2px; color: white; width: 100px;" ></td>
					</tr>
				</table>

			</center>
		</form>
	</div>

</body>
</html>