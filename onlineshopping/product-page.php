<?php  include('header.php');
?>
<!-- <script src="http://localhost/onlineshopping/assets/js/add-to-cart.js"></script> -->


<div class="main-class">
	<div class="product-image">
		<img class="product-main-img" src="/onlineshopping/assets/images/banner-img.jpg" alt=""/>
	</div>
	<div class="product-description">
		<h2>Redmi Pro </h2>
		<p class='product-price'>2k(2000)</p>
		<p class='prodcut-small-desc'>India's Number one brand</p>
		<form method="POST" action=''>
			<input type='number' name='product-qnty' id='number' class='pro-qnty' value='1' min='1'/>
			<input type='button' name='add-to-cart' id='addtocart' onclick='functions();' class='add-to-carts' value='Add to cart'/>
		</form>
	</div>
</div>
<script>
//window.add
function functions(){ 
alert("test");
	 //var value= document.getElementById('number').value;
    //console.log(value);
   // return false;
}
</script>
<?php 

include('footer.php');
?>
