<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home | Welcome to KINDOM OF eBOOKS Online Library</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Home_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image02.jpg');
            background-position: center;
            background-size: cover;
            height: 200vh;
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
                            <li><a href="#">Home</a></li>
                            <li><a href="Search.php">Search</a></li>
                            <li><a href="Payments.php">Payments</a></li>
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
        <br />
        <input type="search" name="srch" id="srch" placeholder="Search the option what you need to find" />
        <a href="Search.php"><input type="button" name="bttn2" id="bttn2" value="Search" style="margin-left: 10px;"/></a>
    </center>
    <br /><br />
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">The <span class="maintxt">LARGEST</span> Online Book store<br />Covering<br />Entire world.</span>
            <img src="Images/Image05.jpg" style="width: 100%; height: 400px;">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">All books at <br /><span class="maintxt">ONE PLACE.</span></span>
            <img src="Images/Image06.jpg" style="width: 100%; height: 400px;">
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">Can access <br /><span class="maintxt">EASILY.</span></span>
            <img src="Images/Image07.jpg" style="width: 100%; height: 400px; ">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div><br />

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <div class="text">POPULAR BOOKS</div><br />
    <center>
        <table border="0" width="100px" class="tbl2">
            <tr>
                <td class="zoom">
                    <img class="book" src="Images/Image08.jpg" />
                </td>
                <td class="zoom">
                    <img class="book" src="Images/Image09.jpg" />
                </td>
                <td class="zoom">
                    <img class="book" src="Images/Image10.jpg" />
                </td>
                <td class="zoom">
                    <img class="book" src="Images/Image11.jpg" />
                </td>
                <td class="zoom">
                    <img class="book" src="Images/Image12.jpg" />
                </td>
                <td class="zoom">
                    <img class="book" src="Images/Image13.jpg" />
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <h4 class="link2"><a href="Search.php">Click here </a>For More Books</h4>
                </td>
            </tr>
        </table>
    </center>
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