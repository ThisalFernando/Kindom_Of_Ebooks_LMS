<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Login | Kindom of Ebooks</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Login_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image01.jpg');
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
                        <div class="img03"><a href="User_Details_Page.html"><img src="Images/Image03.png" /></a></div>
                    </td>
                    <td>
                        <a href="#"><input type="Button" id="btnn1" value="Login" /></a>
                        <a href="Sign_up.php"><input type="Button" id="btnn1" value="Sign Up" /></a>
</td>
                    <td rowspan="2">
                        <div class="logo" align="right"><img src="Images/Logo02.png" /></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="navbar"></div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="Search.php">Search</a></li>
                            <li><a href="Payments.php">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="About.php">About us</a></li>
                        </ul>
        </div>
        </td>
        </tr>
        </table>
    </div>
    <center>
        <br /><br />
        <div class="login_dtls">
            <fieldset>
                <legend></legend>
                <form action="action.php" method="POST">
                    <center>
                        <h1 class="Login">LOG IN</h1>
                        <h5 class="txt1">Enter your Login credentials</h5>
                        <?php if(isset($_GET['error'])) {?>
                            <p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                        <input type="text" placeholder="   Enter your First Name as your username" name="uname" id="uname"><br /><br />
                        <input type="password" placeholder="   Password" name="pwd" id="pwd" ><br /><br />
                        <label>
                            <input type="checkbox" name="remember">Remember me
                        </label><br />
                        <span class="psw"><a href="User_Details.php"><h4 class="txt1">Forgot password?</h4></a></span><br />
                        <button type="submit" id="btnn1">Log in</button>
                        <br />
                        <h5 class="txt1">If you don't have an account,</h5><br />
                        <a href="Sign_up.php"><input type="button" id="btnn1" value="Sign up" /></a>
                    </center>
                </form>
            </fieldset>
        </div>

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