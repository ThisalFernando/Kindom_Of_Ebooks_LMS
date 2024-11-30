<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Home_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/About_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image20.jpg');
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
                            <li><a href="Search.php">Search</a></li>
                            <li><a href="Payments.php">Payments</a></li>
                            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                        </div>
                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2" style="margin-left: 550px; width: 100px;">Log out</button></a>
                    </td>
                </tr>
        </table>
    </div>
    <br />
    <div class="tbl2">
        <table border="0">
            <tr>
                <td>
                    <a href="#"><button id="btnn2">ABOUT US</button></a><br />
                    <a href="Terms_Conditions.php"><button id="btnn2">TERMS AND CONDITIONS</button></a><br />
                    <a href="Privacy_Policy.php"><button id="btnn2">PRIVACY AND POLICIES</button></a><br />
                </td>
                <td>
                    <div class="vl"></div>
                </td>
                <td>

                </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td colspan="5">
                    <h1 class="topic">ABOUT US</h1>
                
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <div class="text"></div><br /><span class="text3">The <span class="maintxt">LARGEST</span> Online Book store<br />Covering<br />Entire world.</span>
                            <img src="Images/Image05.jpg" style="width: 970px; height: 400px; margin-top: -30px;">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <div class="text"></div><br /><span class="text3">All books at <br /><span class="maintxt">ONE PLACE.</span></span>
                            <img src="Images/Image06.jpg" style="width: 970px; height: 400px; margin-top: -30px;">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <div class="text"></div><br /><span class="text3">Can access <br /><span class="maintxt">EASILY.</span></span>
                            <img src="Images/Image07.jpg" style="width: 970px; height: 400px; margin-top: -30px;">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <div class="text"></div><br /><span class="text3"><span class="maintxt">EASY</span><br />And<br /><span class="maintxt">TRUSTABLE</span><br />Payment Gateway.</span>
                            <img src="Images/Image19.jpg" style="width: 970px; height: 400px; margin-top: -30px;">
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
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                    <br />

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
                    </script><br />
                    <p class="para1">
                        Kindom of Ebooks online library is the largest book store who is covering the entire world. We are carring,</p><div class="main1">20M+ USER BASE</div><div class="main1">20M+ BOOK SERIES</div>
                    <p class="para1">
                        We could to be a incredibla online book store in the world within 4 years since 2000. We have an ability to introduce a whopping experience for our readers
                        from our resources. Not only that, we provided a huge, secure and easy payment gateway platform for our users. We have a huge publisher base who are covering
                        the entire world. We are protecting our users and their person informations since starting point. Our user payments details are also encrypted since 2000s. 
                        So, we are proud to say that Kindom of Ebooks is the famouse online library among people now.
                    </p>
        </table>
    </div><br />

                    
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