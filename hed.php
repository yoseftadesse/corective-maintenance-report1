<?php
	include("conn.php");  
 session_start();
if(isset($_SESSION['accountid']))
 {
     //header("Location:login.php");
 } else {
	 header("Location:login.php");
 }
 
 ?>
 <?php
	include("conn.php");  
if(isset($_SESSION['accountid']))
 {
  $user_id=$_SESSION['accountid'];
 } else {
 ?>
 <?php
 }
 ?>
 <?php
			//include('conn.php');
			//session_start();

			//mag show sang information sang user nga nag login
			$result=mysqli_query($conn,"select * from account ")or die(mysqli_error);
			$row=mysqli_fetch_array($result);
            $accountid=$row['accountid'];
			$username=$row['username'];
			$password=$row['password'];
			
			?> 
  <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

<table align="center" width="100% height="100%" border=0 >
<tr><td height=10%  colspan=3>
<img src="new/aaaa.png" width="8%" height="83px"> <img src="new/43.PNG" width="80%" height="80px"><img src="nw/45.jpg" width="10%" height="80px">

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
                     <li><a href="retrive1.php"><span class="glyphicon glyphicon-user"></span> view CM report</a></li>
                    <li><a href="searchcustomer.php"><span class="glyphicon glyphicon-log-in"></span> serch site</a></li>
                    <li><a href="feedback1.php"><span class="glyphicon glyphicon-user"></span> view feedback</a></li >
                    <li><a href="changepass1.php"><span class="glyphicon glyphicon-user"></span> change password</a></li >
<li>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li ><a href="home.php"><span class="glyphicon glyphicon-user"></span>Log out</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
            
        </div><!-- /.container-fluid -->
    </nav>