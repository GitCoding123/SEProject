<?php 
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's 4 Dinner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!--Left Column-->
        <div class="logo">
            <a href="home.html">What's <span>4</span> Dinner</a>
        </div>
        <div class="menu">
            <ul>
               <li><a href="findrecipe.html">Find a Recipe</a></li>
               <!--<li><a href="mealplan.html">Meal Plan</a></li>-->
               <li><a href="pantry.html">Pantry</a></li>   
           </ul>
        </div>
        <div class="account">   
            <p><a href="account.html">Account</a></p>   
        </div>
        <!--Main Column-->
        <div class="main">
            <h1>Featured Recipe: <span>Pork Chops with Mushroom Sauce</span></h1>
            <img src="images/chopsmushsauce.png" alt="porck chops in mushroom sauce" class="midimg">
            <p>Deliciously easy pork chops with creamy garlic herb mushroom sauce is a super easy dinner recipe! perfect for any night of the week.</p>
            <h1>Last Week's Recipe: <span>Huli-Huli Chicken</span></h1>
            <img src="images/hulihulichicken.png" alt="Huli-huli chicken" class="midimg">
            <p>Originating in Hawaii, this chicken recipe is really all about the sauce.</p>
        </div>
        <!--Right Column-->
        <div class="listheader">
            <a href="">Shopping List</a>
            <hr>
        </div>
        <div class="list">
            <ul>
                <li>Parsley</li>
                <li>Brown Mushrooms</li>
                <li>Garlic</li>
                <li>Pork Chops</li>
                <li>Heavy Cream</li>
                <li>Thyme</li>
            </ul>
        </div>
    </div>
</body>
</html>