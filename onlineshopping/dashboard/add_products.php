 
<?php require('header.php'); ?>
<form method='post' action='' enctype='multipart/form-data'>
<input type="text" name="product_name" placeholder="product name" id='product_name' class=''/><br/>
<input type="text" name="product_category" placeholder="product category" id='product_cat' class=''/><br/>
 <textarea name='product_description' id='pro_desc'></textarea><br/>
<input type='file' name='product_img' id='product_image'/><br/>
<input type='text' name="product_price" id='product_price'/>
<input type="submit" name="submit" value='add_product'/><br/>
</form>
<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['product_name'];
	$category=$_POST['product_category'];
	$description=$_POST['product_description'];
	$img=$_FILES['product_img']['name'];
	//$img_text=mysqli_real_escape_string($con,$_imgtext);
	$target="images/".basename($img);
	$price=$_POST['product_price'];
$sql="insert into products(product_name,product_category,product_description,image,price)VALUES('$name','$category','$description','$img','$price')";
$result=$con->query($sql);
if($result==true)
{
	echo "product added";
}
else 
{
	echo "product not added";
}
	if(move_uploaded_file($_FILES['product_img']['tmp_name'],$target))
	{
	echo "upload sucess";
	}
	else
	{
	echo "failed";
	}
}
$sql="SELECT * FROM products";$result=$con->query($sql);
	//print_r($result);
	while($row=$result->fetch_assoc())
	{
	echo $row['product_id'];
?>
<img src='./images/<?php echo $row['image']; ?>' width="300" height="200"/>
<?php 
echo $row['product_description'];
echo $row['product_category'];
echo $row['product_name'];
	}
	
?>
<!-- <img src='images/'. -->

<?php require('footer.php'); ?>
