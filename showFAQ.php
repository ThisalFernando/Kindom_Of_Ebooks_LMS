<?php
    include_once 'Config.php';
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> FAQ | Kindom of Ebooks</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Login_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
      
        <div class="tbl1">
            <table border="0" width="100%">
                <tr>
                    <td>
                        <div class="img03"><a href="User_Details.php"><img src="Images/Image03.png" /></a></div>
                    </td>
                    <td>
                        <a href="Login.php"><input type="Button" id="btnn1" value="Login" /></a>
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
                            <li><a href="home.php">Home</a></li>
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
        <div class="container my-5">
            <h1>Members' FAQs'</h1>
            <h4 style="font-family: Calibri;">We give you as a Quick answer!</h4><br>
            <table class="table">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>FAQs</th>
            </tr>
            <?php
                $sql="SELECT * FROM faq_tbl";
                $result=$conn->query($sql);

                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[Username]</td>
                            <td>$row[Email]</td>
                            <td>$row[FAQs]</td>
                            <td>
                                <a class='btn btn-danger btn-sm' href='deleteFAQ.php?Email=$row[Email]'>Delete</a>
                            </td>
                            
                        </tr>";

                        
                    }
                }else{
                    echo "Empty Rows!";
                }
                echo"<script>alert('Task Completed!')</script>";

            echo "</table>";

            mysqli_close($conn);

            ?>
            <br>
            <a href="FAQ_Feedback.php"><button id="btnn1">Go Back</button></a>
        </div>

    <div class="tbl1">
        <table border="0" width="100%" style="margin-bottom: 2000px;">
            <tr>
                <td rowspan="4">
                    <img src="Images/Logo02.png" width="450px" />
                </td>
                <td>
                    <h2 class="footer" style="font-size: 25px; font-weight: bold;">Contact Us:</h2>
                </td>
                <td colspan="3">
                    <h2 class="footer" style="font-size: 25px; font-weight: bold;">Direct Links:</h2>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <h3 class="footer" style="font-size: 18px; font-weight: bold;">0112-109585</h3>
                    <h3 class="footer" style="font-size: 18px; font-weight: bold;">0704-993959</h3>
                    <h3 class="footer" style="font-size: 18px; font-weight: bold;">0754-989432</h3>
                </td>
                <td>
                    <a href="Terms_Conditions.php"><h4 class="footer" style="font-size: 15px; font-weight: bold;">Terms and Conditions</h4></a>
                </td>
                <td>
                    <a href="FAQ_Feedback.php"><h4 class="footer" style="font-size: 15px; font-weight: bold;">FAQ & Feedback</h4></a>
                </td>
                <td>
                    <a href="About.php"><h4 class="footer" style="font-size: 15px; font-weight: bold;">About Us</h4></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="footer" style="font-size: 25px; font-weight: bold;">Follow us on:</h2>
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
                    <hr style="width: 900px; background-color: white;  height: 3px; margin-left: 300px;">
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <h5 class="footer" style="font-size: 13px; font-weight: bold;">Copyright @ 2023 KindomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>
                    <br>
                </td>
            </tr>
           
        </table>
    </div>
    </div>

</body>
</html>