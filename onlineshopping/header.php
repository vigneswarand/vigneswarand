
<html>
	<head>
		<title> onlineshoping|home </title>
		<link rel='stylesheet' type='text/css' href='./assets/css/main.css'>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

	</head>	
	<body>
		<h1>Online shopping</h1>
			<p>purchase all in one places</p>
<header>
			<nav>
				<ol>
				    <li>home</li>
					<li>About</li>
					<li>contact us</li>
					<li>shop</li>
					<li><a href='/onlineshopping/register.php'>Register</a></li>
					<li><a href='cart.php'>cart page</a></li>
					<li><a href='#'>category Page</a></li>
					<li><a href='product-page.php'>Product Page</a></li>
					<li><a href='javascript:void(0)'>Cart</a><span class="cart-count-total"><?php $_SESSION['test']='tetteste'; print_r($_SESSION['test']); ?></span></li>
					</ol> 
<input type='search' name='s' placeholder='search_products'/>				
				 
             </nav>
     </header>
	 
	 <?php require('db.php');  ?>