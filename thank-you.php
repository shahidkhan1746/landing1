<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$date = strip_tags($_POST['date']);
$adults = strip_tags($_POST['adults']);


// Send Message
mail( "shahidkhan1746@gmail.com@gmail.com", "India Enquiries 2024 - $name",
"Name: $name\nPhone: $phone\nEmail: $Email\nDate: $date\nAdults: $adults\n",
"From: Kashmir Enquiries <manager@chasing-horizons.com>" );
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chasing Horizons | Kashmir Tour Packages | Srinagar Tour Packages | Book your trip to Kashmir</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#76cef1" />
    <meta name="description" content="Chasing Horizons | Kashmir Tour Packages | Srinagar Tour Packages | Book your trip to Kashmir">
    <meta name="keyword" content="srinagar tour, kashmir tour packages, kashmir travel, kashmir trip, kashmir packages, jammu kashmir tour packages">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!--== GOOGLE FONTS ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
    <!--== CSS FILES ==-->
    
	



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div>
	  <p style="font-size: 18px">Thank you for contacting Us</p>
</div>



</body>


</html>