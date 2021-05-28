<?php 

require_once('header.php');

?>
<div class='cart-table'>
<table style="border:1px solid black">
<tr><th>sl.no</th><th>product name</th><th>price</th><th>quantity</th></tr>
<tr><td>1</td><td>product one</td><td></td><td>2</td></tr>
</table>
<div><input type='submit' name='update-cart' value='update cart' /></div>
<div><input type='text' name='couponcode' /><input type='submit' name='coupon' value='Apply Coupon'></div>
<div><button ><a href='checkout.php'>Proceed to checkout</a></button></div>

</div>
<?php 
require_once('footer.php');
?>