<!DOCTYPE HTML>
<html>
<head>
<title>Registration Form</title>
<style>  

  form
  {
	  
	 border-radius:40px;
	  width:450px;
	  height:580px;
	  background-color:#eee;
	 
  }

  table{
	  margin-left:8%;
  }
  
input[type=text], input[type=email],[type=submit]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
  table tr td
  {
	  padding:10px;
	  font-family:'Arial';
  }
form{
	
	margin:0px 35% 0px 35%;
}

  </style>
</head>
<body>
<form action="" method="get">
  
 <table>
 <h1 style="text-align:center;padding-top:30px;">Registration Form</h1>
 <hr>
   <tr>
     <td>Name : </td><td><input type='text' name="name" placeholder="Enter Name" required></td>
   </tr>
    <tr>
     <td>College Name : </td><td><input type='text' name="cllgname" placeholder="Enter College Name" required></td>
   </tr>
    <tr>
     <td>Email : </td><td><input type='email' name="email" placeholder="Enter Email" required></td>
   </tr>
    <tr>
     <td>Contact No	. : </td><td><input type='text' name="contactno" placeholder="Enter Contact No." required></td>
   </tr>
    <tr>
     <td>Field Of Interest : </td><td><input type='text' name="fointerest" placeholder="Enter Field Of Interest" ></td>
   </tr>
    <tr>
     <td colspan='2' align='center'><input type='submit' name="submit" value="Register"></td>
   </tr>
 </table>

</form>
</body>
</html>
<?php   

  if(isset($_GET['submit']))
  {
   $name = $_GET['name'];
   $cllgname = $_GET['cllgname'];
   $email = $_GET['email'];
   $contactno = $_GET['contactno'];
   $fointerest = $_GET['fointerest'];

   $con = mysqli_connect('localhost','root','','eventroler') or die('Error in connection');
   $q = "INSERT INTO Register(Name,Cllgname,Email,Contactno,Fointerest) VALUES('$name','$cllgname','$email','$contactno','$fointerest')";
    $run = mysqli_query($con,$q);
	if(!$run)
	{
		echo "Error in run".mysqli_error($con);
	}
	else
	{
		echo "Susssss";
	}
  mysqli_close($con);
  ?>   

    <script>alert('Successfully Registered');</script>


  <?php
   
  }
  ?>