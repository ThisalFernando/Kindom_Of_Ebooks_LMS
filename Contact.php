<?php
include_once 'Config.php';

session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

$name = $_SESSION['First_Name'];
				
				$sql = "SELECT * FROM signup_tbl WHERE First_Name='$name'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="Js/contactScript.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Contact_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us </title>
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image21.jpg');
            background-position: center;
            background-size: cover;
            height: 180vh;
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
                            <h1>Welcome Back, <?php echo $_SESSION['First_Name']; ?></h1>
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
                            <li><a href="Payments.php">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="About.php">About us</a></li>
                        </ul>

                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2" style="margin-left: 550px;">Log out</button></a>
                    </td>
                </tr>
            </table>
        </div>

        <br />
        <center>
        <table border="0" width="100%">
            <tr>
                <td colspan="2">
                    <h1 class="contact">CONTACT US</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="SubmitContact.php" method="POST">
                        <label>Enter your First Name: </label>
                        <Input type="text" name="fname" id="fname" value="<?php echo $row['First_Name']; ?>" ><br><br>

                        <label>Enter your Last Name: </label>
                        <Input type="text" name="lname" id="lname" style="margin-left: 55px;" value="<?php echo $row['Last_Name']; ?>" ><br><br>

                        <label>Enter your T.P Number: </label>
                        <input type="text" name="tel" id="tel" style="margin-left: 47px;" value="<?php echo $row['Telephone_Number']; ?>" ><br><br>

                        <label>Enter your Email: </label>
                        <input type="email" name="email" id="email" style="margin-left: 88px;" value="<?php echo $row['Email']; ?>" ><br><br>

                        <label>Any Issues: </label><br>
                        <textarea name="issue" id="issue" placeholder="What you need?"></textarea><br><br><br>

                        <input type="submit" id="btnn4" name="btnn4" value="Submit">
                        <input type="reset" id="btnn4" name="btnn4" value="Reset" onclick="promptButton()">
                </td>
                <td>
                    <table border="0" style="background-color: rgba(250,250, 250, 0.5); width: 650px; height: 520px; font-family: Calibri; font-size: 19px;">
                        <tr>
                            <td colspan="2">
                                <h3>If you have any issues, please contact us!</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-phone"></a><span class="title1">Contact us:</span><br>
                                <div class="tel">
                                
                                0112-3109589<br>
                                0704-993959<br>
                                0754-989432<br>
                                </div><br>
                            </td>
                            <td>
                               <a href="#" class="fa fa-map"></a><span class="title1">Location:</span><br>
                                <div class="location">
                                Customer Care Services,<br>
                                422/1/A,<br>
                                Colombo 07,<br>
                                Sri Lanka<br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-envelope"></a><span class="title1">Email:</span><br>
                                <div class="cEmail">kindomofebooks39@gmail.com</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-facebook"></a>/kindomofebooks<br>
                                <a href="#" class="fa fa-twitter"></a> kindomofebooks_Feedbacks<br>
                                <a href="#" class="fa fa-instagram"></a> kindomofebooks_Public<br>
                                <a href="#" class="fa fa-youtube"></a> KindomOfEbooks<br>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </td>
            </tr>


        </table>
        </center>
        <br><br>
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