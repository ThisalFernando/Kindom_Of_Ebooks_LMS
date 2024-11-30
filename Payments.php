<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="Js/paymentsScript.js?v=<?php echo time(); ?>"></script>
    <title> Payments</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Payments_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image19.jpg');
            background-position: center;
            background-size: cover;
            height: 120vh;
        }
    </style>
</head>
<body>
    <div class="bgimage">
        <div class="tbl1">
            <table border="0" width="100%">
                <tr>
                    <td>
                        <div class="img03"><a href="User_Details.php"><img src="Images/Image03.png" /></a></div>
                    </td>
                    <td>
                        <div class="welcome">
                            <h1>Welcome Back, <?php echo  $_SESSION['First_Name']; ?></h1>
                            To see your account, <a href="User_Details.php">Click Here!</a>
                        </div><br />
                    </td>
                    <td>
                        <div class="logo" align="right"><img src="Images/Logo02.png" /></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="navbar"></div>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="Search.php">Search</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="About.php">About us</a></li>
                        </ul>
                        </div>
                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2" style="margin-left: 550px; width: 100px;">Log out</button></a>
                    </td>
                </tr>
            </table>
        </div>
    <center>
    <h1 class="Payments">PAYMENTS</h1>
    <form action="SubmitPayments.php" method="POST">
        <h3>Your Total Payment is, LKR XXXX.00</h3>

        <label>Choose your payment option:</label><br />
            <input type="radio" id="op1" name="op" value="visa" checked/><i class="fa fa-cc-visa" style="color:navy;"></i>
            <input type="radio" id="op2" name="op" value="amex"/><i class="fa fa-cc-amex" style="color:blue;"></i>
            <input type="radio" id="op3" name="op" value="mastercard"/><i class="fa fa-cc-mastercard" style="color:red;"></i>
            <input type="radio" id="op4" name="op" value="discover"/><i class="fa fa-cc-discover" style="color:orange;"></i>
        <br /><br />
        <label>Enter Card Number: </label>
        <input type="text" name="cardNo" id="cardNo" placeholder="  xxxx-xxxx-xxxx-xxxx"  pattern="[0-9]{16}" required/><br /><br />
        <label>Enter Owner's Name: </label>
        <input type="text" name="ownerName" id="ownerName" placeholder="  Full Name" required /><br /><br />
        <label>Expire Date: </label>
        <input type="text" name="date" id="date" placeholder="  MM/YY" pattern="[0-9]{2}+/[0-9]{2}" required /><br /><br />
        <label>Enter Security Code: </label>
        <input type="text" name="sCode" id="sCode" required /><br /><br /><br />
        <div class="note">NOTE: All data are encrypted!</div><br /><br />
        <input type="submit" name="btnn4" id="btnn4" value="Pay" onclick="alertButton()" />
        <input type="reset" name="btnn4" id="btnn4" value="Reset" onclick="promptButton()" />
    </form>

    </center><br /><br />

    <div class="tbl1">
        <table border="0" width="100%">
            <tr>
                <td rowspan="4">
                    <img src="Images/Logo02.png" width="450px" />
                </td>
                <td>
                    <h2 class="footer">Contact Us:</h2>
                </td>
                <td colspan="3">
                    <h2 class="footer">Direct Links:</h2>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <h3 class="footer">0112-109585</h3>
                    <h3 class="footer">0704-993959</h3>
                    <h3 class="footer">0754-989432</h3>
                </td>
                <td>
                    <a href="Terms_Conditions.php"><h4 class="footer">Terms and Conditions</h4></a>
                </td>
                <td>
                    <a href="FAQ_Feedback.php"><h4 class="footer">FAQ & Feedback</h4></a>
                </td>
                <td>
                    <a href="About.php"><h4 class="footer">About Us</h4></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="footer">Follow us on:</h2>
                </td>
                <td colspan="2">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <h5 class="footer">Copyright @ 2023 KindomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>
                </td>
            </tr>
        </table>
    </div>
    </div>

</body>
</html>

<?php
}else{
    header("Location: Login.php");
    exit();
}
?>