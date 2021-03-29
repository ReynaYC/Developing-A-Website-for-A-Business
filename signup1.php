<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Thanks</title>
<style media="screen">
h1 {  color:orange;
}
h2 {  color:red;
}


</style>
</head>
<body>
    <h1>Thank You for Signing Up Our Monthly Newsletter, <?php echo $_GET["firstname"]?>!</h1>
    <h2>We have sent an email confirmation to your email address: <?php echo $_GET["email"]?></h2>
    <h3>Here are your contact information:</h3>
    <h3>Your First Name: <?php echo $_GET["firstname"]?></h3>
    <h3>Your Last Name: <?php echo $_GET["lastname"]?></h3>
    <h3>Your phone: <?php echo $_GET["phone"]?></h3>
    <h3>Your Email: <?php echo $_GET["email"]?></h3>
</body>
</html>
