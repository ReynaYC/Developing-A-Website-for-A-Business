<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank you</title>
    <style media="screen">
    h1 { color:orange;
    }
    h2 {  color:red;
    }
    </style>
</head>
<body>
<h1>Thank you!</h1>
<table id = "t1" align="left" border="1" cellpadding="3" cellspacing="0" width=100%>
  <tr>
      <th>Item Name and Price</th>
      <th>Total Order Amount</th>
      <th>Total Price</th>
      <th>Contact Information</th>
  </tr>
  <?php
  $orders = file("yingc.sgedu.site/project1/Orders.txt");
  $delimiter = ',';

  foreach ($orders as $order)
  {

  $orderFields = explode($delimiter, $order);
  $item= substr( $orderFields[6],38);
  $amount = substr($orderFields[8],21);
  $totalprice = substr($orderFields[7],14);
  $contact = $orderFields[0].$delimiter.$orderFields[1].$delimiter.$orderFields[2].$delimiter.$orderFields[3];
  $output = "<tr> <td>".$item."</td>". "<td>".$amount ."</td>". "<td>".$totalprice ."</td>". "<td>".$contact ."</td> </tr>";
  echo $output;
}
  echo "<h3 style='color:red;'>"."An order confirmation email was sent to". substr($orderFields[3],8).". Thank you for shopping with us. We really appreciate you giving us a moment of your time today. Thanks for being you."."</h3>"
  ?>

</table>
</body>
</html>
