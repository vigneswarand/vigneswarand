<?php 

require_once('header.php');

?>
<div>Billing Address</div>
<form method='post' action='thankyou.php'>
<label>First Name</label>
<input type='text' name='firstname'/>
<label>Last Name</label>
<input type='text' name='lastname'/>
<label>City</label>
<input type='text' name='city'/>
<label>State</label>
<input type='text' name='state'/>
<label>Phone Number</label>
<input type='text' name='phonenumber'/>
<label>Email ID</label>
<input type='text' name='emailid'/>
<label>Pincode</label><input type='text' name='pincode'/>
<label>Country</label><input type='text' name='country'/>
<label></label><input type='checkbox' name='' />create new account
<label>Password</label><input type='password' name='password'/>
</form>
<div>
<table>
<tr><th>Sl.No<th></th>product</th><th>price</th></tr>
<tr><td>1</td><td>product name</td><th>30</th></tr>
<tr><td></td><td>cart total</td><th>30</th></tr>


</table>

<div>Payment Method</div>
<form>
<input type='radio' name='cash-on-delivery' value='cashondelivery'/>Cash on delivery
<input type='submit' name='buyproduct' value='place your order'/>
</form>
</div>

<?php require_once('footer.php'); ?>