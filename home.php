<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>


<body>
<header>
    <div id="logo">
        <img src="images/site/logo.png" alt="Logo image">
    </div>
    <div id="account">
        <a href="#">My Account</a>
    </div>
</header>

<nav>
    <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Classic</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">SUV</a></li>
        <li><a href="#">Trucks</a></li>
        <li><a href="#">Used</a></li>
    </ul>
</nav>
<main>
    <h1>Welcome to PHP Motors!</h1>
    <div id="callToAction">
        <img id="delorean_img" src="images/delorean.jpg" alt="Image of the delorean from Back to the Future.">
        <div id="description">
            <h2>DMC Delorean</h2>
            <p>3 Cup holders <br>Superman doors <br>Fuzzy dice! </p>
        </div>
        <div id="ownButton">
            <a href="#">Own Today</a>
        </div>
    </div>
    <div class="sideBySide">
    
    <div id="reviews">
        <h2>DMC Delorean Reviews</h2>
        <ul>
            <li>"So fast its almost like traveling in time." (4/5)</li>
            <li>"Coolest ride on the road." (4/5)</li>
            <li>"I'm feeling Marty McFly!" (5/5)</li>
            <li>"The most futuristic ride of our day." (4.5/5)</li>
            <li>80's livin and I love it!" (5/5)</li>
        </ul>
    </div>
    
    <div id="upgrades">
        <h2>Delorean Upgrades</h2>
        <div class="grid">
            <div class="upgrade">        
                <div class="img_card"><img src="images/upgrades/flux-cap.png" alt="Image of flux capacitor."></div><a href="#">Flux Capacitor</a>
            </div>
            <div class="upgrade">
                <div class="img_card"><img src="images/upgrades/flame.jpg" alt="Image of flame decal."></div><a href="#">Flame Decals</a>
            </div>
            <div class="upgrade">
                <div class="img_card"><img src="images/upgrades/bumper_sticker.jpg" alt="Image of bumper sticker."></div><a href="#">Bumper Stickers</a>
            </div>
            <div class="upgrade">        
                <div class="img_card"><img src="images/upgrades/hub-cap.jpg" alt="Image of hub cap."></div><a href="#">Hub Caps</a>
            </div>
        </div>
    </div>
    </div>
</main>
<hr>
<footer>
    <p>&copy; PHP Motors, All rights reserved. <br>
        All images used are believed to be in "Fair Use".  Please notify 
        the author if they are not and they will be removed. <br>
        Last Updated: January 14, 2022.
    </p>
</footer>    
</body>

</html>