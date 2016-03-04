<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/3/16
 * Time: 6:01 PM
 */
require_once ("connect.php");

if (@$_POST['add'])
{
    $productId = $_POST['add'];
    $sql = "INSERT INTO `Watches`.`orders` (`productId`, `userId`, `quantity`) VALUES ('".$productId."', '1', '1');";
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    header("Location: added.html");
}


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
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/navagation.css"/>
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
                    <img class="img-circle" src="imgs/Batman.jpg" width="200px" height="200px">
                    <p><a href="JavaScript:newPopup('watchInfo/Batman.html');">The Batman</a></p>
                    <form name="add" method="post">
                        <button name="add" type="submit" value="1">Add to Cart</button>
                    </form>
                </div>
            </th>

            <th>
                <img class="img-circle" src="imgs/Mickey%20Mouse.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Mouse.html');">The Mickey Mouse</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="2">Add to Cart</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/Space-Invaders.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Space.html');">The Space Invader</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="3">Add to Cart</button>
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="imgs/Spider.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Spider.html');">The Spiderman</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="4">Add to Cart</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/Sponge.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Sponge.html');">The Spongebob</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="5">Add to Cart</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/Star%20Wars1.jpeg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Trooper.html');">The Storm Trooper</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="6">Add to Cart</button>
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="imgs/Star%20Wars2.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Dark.html');">The Dark Side</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="7">Add to Cart</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/superman.jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Super.html');">The Super Man</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="8">Add to Cart</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/Tranquilitylane.jpg..jpg" width="200px" height="200px">
                <p><a href="JavaScript:newPopup('watchInfo/Vault.html');">The Vault Boy</a></p>
                <form name="add" method="post">
                    <button name="add" type="submit" value="9">Add to Cart</button>
                </form>
            </th>
        </tr>
    </table>
    <br/>
</div>

</body>
</html>