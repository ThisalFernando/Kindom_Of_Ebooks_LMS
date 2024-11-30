<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Terms & Conditions</title>>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/About_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bgimage {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image20.jpg');
            background-position: center;
            background-size: cover;
            height: 180vh;

        #bttn2 {
            width: 100px;
            height: 30px;
            background: #008DFF;
            border: 2px solid #008DFF;
            color: #fff;
            margin-left: 550px;
            font-size: 17px;
            font-family: Arial;
            font-weight: bold;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            transition: 0.2s ease;
            cursor: pointer;

            #bttn2:hover{
                opacity: .7;
            }

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
                            <li><a href="Contact.php">Contact Us</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                        </div>
                    </td>
                    <td>
                        <a href="Logout.php"><button id="bttn2">Log out</button></a>
                    </td>
                </tr>
            </table>
        </div>
    <br />
    <div class="tbl2">
        <table border="0">
            <tr>
                <td>
                    <a href="About.php"><button id="btnn2">ABOUT US</button></a><br />
                    <a href="#"><button id="btnn2">TERMS AND CONDITIONS</button></a><br />
                    <a href="Privacy_Policy.php"><button id="btnn2">PRIVACY AND POLICIES</button></a><br />
                </td>
                <td>
                    <div class="vl"></div>
                </td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="5">
                    <h1 class="topic">TERMS & CONDITIONS</h1>

                    <p class="para2">
                        <span class="main2">User Accounts:</span> Users are required to create an account to access the online library management system. They may need to provide accurate and up-to-date information during the registration process.
                    </p>
                    <p class="para2">
                        <span class="main2">User Responsibilities:</span> Users are responsible for maintaining the confidentiality of their account credentials and for all activities that occur under their account. They should not share their login information with others or use another person's account.
                    </p>
                    <p class="para2">
                        <span class="main2">Access and Usage:</span> Users are granted a non-exclusive, non-transferable right to access and use the online library management system for personal or educational purposes. Unauthorized use, including unauthorized access, modification, or distribution of the system's content, is strictly prohibited.
                    </p>
                    <p class="para2">
                        <span class="main2">Content:</span> The online library management system may provide access to various types of content, such as books, journals, articles, and multimedia resources. The system may specify the permitted use of these resources, including any restrictions on downloading, copying, printing, or distributing the content.
                    <p>
                    <p class="para2">
                        <span class="main2">Intellectual Property:</span> The intellectual property rights of the online library management system, including its content and software, are typically protected by copyright or other applicable laws. Users are expected to respect these rights and not engage in any activities that infringe upon them.
                    </p>
                    <p class="para2">
                        <span class="main2">Privacy and Data Security:</span> The system should outline its privacy policy, detailing how user data is collected, stored, and used. It should also address any security measures implemented to protect user information.
                    </p>
                    <p class="para2">
                        <span class="main2">Termination:</span> The system may specify conditions under which user accounts can be terminated or suspended, such as violation of terms and conditions or misuse of the system. Users may also have the right to terminate their account at any time.
                    </p>
                    <p class="para2">
                        <span class="main2">Limitation of Liability:</span> The system provider typically includes disclaimers regarding the accuracy, completeness, and availability of the system's content. They may also limit their liability for any damages or losses incurred while using the system.
                    </p>
                    <p class="para2">
                        <span class="main2">Governing Law and Jurisdiction:</span> The terms and conditions should specify the applicable law and jurisdiction that govern any disputes arising from the use of the online library management system.
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