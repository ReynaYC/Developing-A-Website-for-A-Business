<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Detail | Sunrise</title>
<style media="screen">
h1 { color:orange;
}
h4 {  color:red;
}
</style>
</head>
<body>
<h1>Thanks for submitting your order! Below are your order details:</h1>
<?php
	$selection = $_GET["items"];	// get checkbox items
	$fname = $_GET["firstName"];	// get first name
	$lname = $_GET["lastName"];
  $address = $_GET["address"];
  $phone = $_GET["phone"];		// get last name
	$email = $_GET["email"];
  $orderdate = $_GET["orderdate"];
  $payment= $_GET["payment"];			// get email address

	$prices = ["Motorized Curtains"=>200.00, "Smart Fans"=>60.00,"Smart Lamps"=>40.00,"Smart TVs"=>400.00,"Laundary Machine"=>600.00,
"Smart Cameras"=>70.00,"Smart Door Locks"=>70.00,"Smart Mattress"=>700.00,"Smart Plugs"=>20.00,"Smart Speaker"=>40.00];  // create associative array for item prices
	$total = 0;				// total order amount

	// calculate total order amount
	foreach( $selection as $d )
		$total += $prices[$d];


	$delimiter = ",";
	$outputRecord ="Name:  ". $fname . " " . $lname . $delimiter."  Address:  ". $address.
  $delimiter."  Phone:  ".$phone. $delimiter."  Email:  ". $email. $delimiter."  Date of Order:  ".$orderdate. $delimiter.
  "  Method of Payment:  ".$payment;
  $outputRecord1 ="<br>Name:  </br>". $fname . " " . $lname . $delimiter."<br>  Address:  </br>". $address.
  $delimiter."<br>  Phone:  </br>".$phone. $delimiter."<br>  Email:  </br>". $email. $delimiter."<br>  Date of Order:  </br>".$orderdate. $delimiter.
  "<br>  Method of Payment:  </br>".$payment;
	$itemsOrdered = "";
	// Form text string for items ordered & prices
	foreach( $selection as $d )
	{
		if( $itemsOrdered == "" )
			$itemsOrdered =$d . " " . "($".$prices[$d].");";
		else
			$itemsOrdered = $itemsOrdered ." ". $d ." "."($".$prices[$d].");";
	}
	// Append total price to order details
	$itemsOrdered ="<br>  Items are ordered and single price:  </br>".$itemsOrdered . " ".$delimiter.
  "<br>  Total Price:  </br>"."$".$total.$delimiter."<br>  Total Order Amount:  </br>". count($selection);
  $itemsOrdered1 ="<br>  Items are ordered and single price:  </br>".$itemsOrdered . " ".$delimiter.
  "<br>  Total Price:  </br>"."$".$total.$delimiter."<br>  Total Order Amount:  </br>". count($selection);

	// Append order details to output record plus newline so there is one order per line in file
	$outputRecord = $outputRecord . $delimiter . $itemsOrdered . "\n";
  $outputRecord1 = $outputRecord1 . $delimiter . $itemsOrdered1 . "\n";
?>
<?php
  echo $outputRecord;  // display output on web page
	// Append order info to orders file
	file_put_contents( "Orders.txt", $outputRecord1, FILE_APPEND);
	echo "<h3>An order confirmation email was sent to ". $email.".</h3>";
	?>
	<h5>Your order has already be recored into
	<a href="http://yingc.sgedu.site/Orders.txt"><input type="button" value="Order Record" >
</a></h5>


<h4>Thank you for shopping with us. We really appreciate you giving us a moment of your time today. Thanks for being you. </h4>
</body>
</html>
