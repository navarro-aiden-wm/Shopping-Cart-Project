<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/3/16
 * Time: 6:01 PM
 */

?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Watch Shop</title>
    <script src="jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        // Popup window code
        function newPopup(url) {
            popupWindow = window.open(
                url,'popUpWindow','height=1000%,width=1000%,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="navagation.css"/>
    <style>
        th{
            width: 24.9%;
        }
        .img-circle{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
</header>

<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li><a href='info.html'><span>Info</span></a></li>
        <li><a href='signup.php'><span>Sign up</span></a></li>
        <li><a href='cart&checkout.php'><span>Shopping Cart</span></a></li>
    </ul>
</div>
<!-- END OF NAVIGATION BAR -->

<div id="content">
    <h1 align="center">Home</h1>
    <table align="center">
        <tr style="margin-bottom: 10px;">
            <th>
                <div id="batman">
                    <img class="img-circle" src="Watches%20for%20Sale/Batman.jpg" width="200px" height="200px">
                    <p><a href="JavaScript:newPopup('Batman.html');">The Batman</a></p>
                    <form action="added.html">
                        <input type="submit" value="Add to Cart">
                    </form>
                </div>
            </th>

            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Mickey%20Mouse.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Mouse.html');">The Mickey Mouse</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Space-Invaders.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Space.html');">The Space Invader</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Spider.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Spider.html');">The Spiderman</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Sponge.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Sponge.html');">The Spongebob</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Star%20Wars1.jpeg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Trooper.html');">The Storm Trooper</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Star%20Wars2.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Dark.html');">The Dark Side</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/superman.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Super.html');">The Super Man</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
            <th>
                <img class="img-circle" src="Watches%20for%20Sale/Tranquilitylane.jpg..jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('Vault.html');">The Vault Boy</a></p>
                <form action="added.html">
                    <input type="submit" value="Add to Cart">
                </form>
            </th>
        </tr>
    </table>
    <br/>
</div>

</body>
</html>