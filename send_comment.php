<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
</head>

<body style="background: url(img/h.jpg) no-repeat center center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;" 
    class="imgf ">    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

<table align="center" width="100% height="100%" border=0 >
<tr><td height=10%  colspan=3>
<img src="new/aaaa.png" width="8%" height="83px"> <img src="new/43.PNG" width="80%" height="80px"><img src="new/45.jpg" width="10%" height="80px">

</td>
</tr>
</table>
    <!--Header End-->

        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
			
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					
                </button>
				
                <a class="navbar-brand" href="home.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                                   <li><a href="about.php"><span class="glyphicon glyphicon-user"></span> About us</a></li>
                    

             
                    <li><a href="feedback.php"><span class="glyphicon glyphicon-log-in"></span> feedback</a></li>
                    <li><a href="developers.php"><span class="glyphicon glyphicon-user"></span> developer</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> login</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br>

<?php
$conn = mysqli_connect("localhost","root","","cm");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$quy=mysqli_query($conn,"INSERT INTO comment values('$name','$email','$message')");
if(!$quy)
{
echo "not sent.".mysqli_error();
}
else{
echo "<b>"."<font color='red' size='3'>"."your comment is sucessfully sent!"."</font>"; 
echo "<br />"."<b>"."Thank you!!!"."<b>";
}
mysqli_close($conn);
?> 
    <footer class="container-fluid"><br>


        <p>Copyright &copy 2019  WBCMS FOR ETHOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
