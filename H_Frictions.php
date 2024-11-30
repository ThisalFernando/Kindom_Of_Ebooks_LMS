<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Search your book | Historical Frictions</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Search_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image18.jpg');
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
                            <li><a class="active" href="#">Search</a></li>
                            <li><a href="Payments.php">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="About.php">About us</a></li>
                        </ul>
                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2" style="margin-left: 550px; width: 100px;">Log out</button></a>
                    </td>

                </tr>
            </table>
        </div>

        <br /><br />

        <div class="tbl2">
            <table border="0">
                <tr>
                    <td>
                        <div class="text">CATEGORIES:</div>
                    </td>
                    <td colspan="5">
                        <input type="search" name="srch1" id="srch1" placeholder="   Search the book category you prefer" />
                        <button id="btnn1">Search</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5">
                        <h1 class="topic">HISTORICAL FRICTIONS</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="Search.php"><button id="btnn2">NOVELS</button></a><br />
                        <a href="Frictions.php"><button id="btnn2">FRICTIONS</button></a><br />
                        <a href="#"><button id="btnn2">HISTORICAL FRICTIONS</button></a><br />
                        <a href="S_Frictions.php"><button id="btnn2">SCIENCE FRICTIONS</button></a><br />
                        <a href="L_Frictions.php"><button id="btnn2">LITERARY FRICTIONS</button></a><br />
                        <a href="S_Stories.php"><button id="btnn2">SHORT STORIES</button></a><br />
                        <a href="F_Stories.php"><button id="btnn2">FANTACY STORIES</button></a><br />
                        <a href="T_Books.php"><button id="btnn2">TEXT BOOKS</button></a><br />
                        <a href="P_Books.php"><button id="btnn2">PICTURE BOOKS</button></a><br />
                    </td>
                    <td>
                        <div class="vl"></div>
                    </td>
                    <td>
                        <img class="book" src="Images/N34.jpg" />
                        <img class="book" src="Images/N35.jpg" />
                        <img class="book" src="Images/N36.jpg" />
                        <img class="book" src="Images/N37.jpg" />
                        <img class="book" src="Images/N38.jpg" />
                        <img class="book" src="Images/N39.jpg" />
                        <img class="book" src="Images/N40.jpg" />
                        <img class="book" src="Images/N41.jpg" />
                        <img class="book" src="Images/N42.jpg" />
                        <img class="book" src="Images/N43.jpg" />
                        <img class="book" src="Images/N44.jpg" />
                        <img class="book" src="Images/N45.jpg" />
                        <img class="book" src="Images/N46.jpg" />
                        <img class="book" src="Images/N47.jpg" />
                        <img class="book" src="Images/N48.jpg" />
                        <img class="book" src="Images/N49.jpg" />
                        <img class="book" src="Images/N50.jpg" />
                        <img class="book" src="Images/N51.jpg" />
                    </td>
                </tr>
            </table>
        </div>
        <br /><br />

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