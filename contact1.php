<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Thanks</title>
<style media="screen">
h1 { color:orange;
}
h2 {  color:red;
}
</style>
</head>
<body>
  <h1>Thank You, <?php echo $_GET["firstname"]?>! We have recorded your questions and will contact you as soon as possible.</h1>
  <h2>We have sent an email confirmation abou your questions to your email address: <?php echo $_GET["email"]?></h2>
    <h3>Your First Name: <?php echo $_GET["firstname"]?></h3>
    <h3>Your Last Name: <?php echo $_GET["lastname"]?></h3>
    <h3>Your Country: <?php echo $_GET["country"]?></h3>
    <h3>Your Email: <?php echo $_GET["email"]?></h3>
    <h3>Your Message: <?php echo $_GET["message"]?></h3>
</body>
</html>
