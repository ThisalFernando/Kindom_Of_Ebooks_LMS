<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Search_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Search your book | Novels</title>
    <script type="text/javascript" src="Js/searchScript.js?v=<?php echo time(); ?>"></script>
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
                            <li><a class="active" href="#">Search</a></li>
                            <li><a href="Payments.php">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="About.php">About us</a></li>
                        </ul>

                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2" style="margin-left: 550px;">Log out</button></a>
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
                        <h1 class="topic">NOVELS</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"><button class="btnn2" type="button" id="btnn2">NOVELS</button></a><br />
                        <a href="Frictions.php"><button class="btnn2" type="button" id="btnn2" >FRICTIONS</button><br />
                        <a href="H_Frictions.php"><button class="btnn2" type="button" id="btnn2" >HISTORICAL FRICTIONS</button><br />
                        <a href="S_Frictions.php"><button class="btnn2" type="button" id="btnn2" >SCIENCE FRICTIONS</button><br />
                        <a href="L_Frictions.php"><button class="btnn2" type="button" id="btnn2" >LITERARY FRICTIONS</button><br />
                        <a href="S_Stories.php"><button class="btnn2" type="button" id="btnn2" >SHORT STORIES</button><br />
                        <a href="F_Stories.php"><button class="btnn2" type="button" id="btnn2" >FANTACY STORIES</button><br />
                        <a href="T_Books.php"><button class="btnn2" type="button" id="btnn2" >TEXT BOOKS</button><br />
                        <a href="P_Books.php"><button class="btnn2" type="button" id="btnn2" >PICTURE BOOKS</button><br />
                    </td>
                    <td>
                        <div class="vl"></div>
                    </td>
                    <td>
                        <img class="book" id="book1" src="Images/N01.jpg" />
                        <img class="book" id="book2" src="Images/N02.jpg" />
                        <img class="book" id="book3" src="Images/N03.jpg" />
                        <img class="book" id="book4" src="Images/N04.jpg" />
                        <img class="book" id="book5" src="Images/N05.jpg" />
                        <img class="book" id="book6" src="Images/N06.jpg" />
                        <img class="book" id="book7" src="Images/N07.jpg" />
                        <img class="book" id="book8" src="Images/N08.jpg" />
                        <img class="book" id="book9" src="Images/N09.jpg" />
                        <img class="book" id="book10" src="Images/N10.jpg" />
                        <img class="book" id="book11" src="Images/Image14.jpg" />
                        <img class="book" id="book12" src="Images/N11.jpg" />
                        <img class="book" id="book13" src="Images/N12.jpg" />
                        <img class="book" id="book14" src="Images/N13.png" />
                        <img class="book" id="book15" src="Images/Image15.jpg" />
                        <img class="book" id="book16" src="Images/Image17.jpg" />
                        <img class="book" id="book17" src="Images/N14.jpg" />
                        <img class="book" id="book18" src="Images/N15.jpg" />
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