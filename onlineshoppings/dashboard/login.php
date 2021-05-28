<?php require('header.php'); ?>
<div class='vi-form'>
	<h1>Login</h1>
	<form method="post" action="" onsubmit="cll()">
<label>login</label>
	<input type="text" name="email" id="emailname" /><br/><br/>
<label>Password</label>
<input type="text" name="lname" id="lname" value=""/><br/><br/>
<input type="submit" name="loginbtn"  id="login-btn" value="login"/><br/><br/>

</div>

<?php 
if(isset($_POST['loginbtn']))
{
$email=$_POST['email'];
$password=$_POST['lname'];
$sql="select * FROM  register where email='$email' and password='$password'";
	$result=$con->query($sql);
	//print_r($result);
	while($row=$result->fetch_assoc())
	{
	echo $row['id'];
	}
	if($result==true)
	{
	header('location:/onlineshopping/dashboard/add_products.php');
	}
	else 
	{
	header('location:/onlineshopping/dashboard/resdfsdfsgister.php');		
	}
}
else
{
	echo "please submit form to login";
}
?>
<script>
function cll()
{
var valueone=document.getElementById("emailname").value;
var valuetwo=document.getElementById("lname").value;
if(valueone=="")
{
	alert(valueone);
	return false;
}

else if(valuetwo=="")
{
alert(valuetwo);
return false;
}
}
</script>

<?php include('footer.php'); ?>