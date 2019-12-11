<?php
$date = date("Y/m/d");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple LAMP Stack</title>
</head>
<body>

<h1>Simple LAMP Stack Application(<?php echo $date?>)</h1>
<hr>
<p>Contact Us</p>
<form action="">
    <label for="name">Name</label>
    <br>
    <input type="text" id="name" name="name">
    <br>
    <label for="phone">Phone</label>
    <br>
    <input type="text" id="phone" name="phone">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
