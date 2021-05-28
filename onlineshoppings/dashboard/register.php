<?php require('header.php'); ?>

<div class='vi-form'>
	<h1>Register</h1>
	<form method="post"  enctype='multipart/formdata' action="">
<label>First Name</label>
	<input type="text" name="fname" id="fname" /><br/><br/>
<label>Father Name</label>
<input type="text" name="lname" id="lname" value=""/><br/><br/>
<label>Email</label>
<input type="text" name="email" id="emilid" value=""/><br/><br/>

<label>phone number</label>
<input type="text" name="phonenumber" id="phnumber" value=""/><br/><br/>

<div>Gender</div><label>Male</label>
<input type="radio" name="gender" value="male"/>
<label>Female</label>
<input type="radio" name="gender" value="female"/>
<label>Transgender</label>
<input type="radio" name="gender" value="transgender"/>
<br/>
<div class='checkbox-class'>
<input type="checkbox" name='language[]' value='tamil' /><span>Tamil</span>
<input type="checkbox" name='language[]' value='english' /><span>English</span>
</div>
<div>
<label>Country</label>
<select name='country'>
<option value=''>Select</option>
<option value='india'>INDIA</option>
<option value='others'>OTHERS</option>
</select><br/><br/>
</div>
<label>
Address
</label>
<textarea name='address'></textarea><br/>
<label>City</label>
<input type="text" name="city" id="city" value=""/><br/><br/>
<label>Your Pic</label>
<input type="file" name='photo'/><br/><br/>
<label>Security question</label>
<select name='security_question'>
<option value=''>SELECT</option>
<option value='color'>what is your favorite color</option>
<option value='petname'>what is you pet name</option>
<option value='schoolname'>what is your schoolname</option>
</select><br/><br/>
<div class='vi-security'>
<label>give your value</label>
<input type='text' name='securiy_ans'/><br/><br/>
	</div>
<label>password</label>
<input type='password' name='password'/><br><br/>
	
<label>Confirm password</label>
<input type='password' name='confirm_passwords'/><br/><br>
	
<input type="submit" name="register" id='register-button' value="register"/><br/>
	</form>
</div>

<?php 
if($con==true)
{
	//echo "suucesss";
	
	
}
else
	
	{
		echo "failded to conntect";
	}
	if(isset($_POST['register']))
{
	$language=implode(',',$_POST['language']);
	$firstname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$gender=$_POST['gender'];
	//$language=$_POST['language'];
	
//	print_r($language);
	
	$country=$_POST['country'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$photo=$_POST['photo'];
	$security_question=$_POST['security_question'];
	$password=$_POST['password'];
	$confirm_passwords=$_POST['confirm_passwords'];
$sql="INSERT into register(fname,lname,email,phnumber,gender,language,country,
address,city,photo,security_question,password,confirm_passwords
)values('$firstname','$lname','$email','$phonenumber','$gender','$language','$country','$address','$city','$photo','$security_question','$password','$confirm_passwords')";	
	echo $sql;
	$result=$con->query($sql);
	if($result==true)
	{
		echo "inserted successfully";
		header("location:http://localhost/onlineshopping/login.php");
	}
	else 
	{
		echo "failed to insert";
	}
	}
?>
<?php include('footer.php'); ?>