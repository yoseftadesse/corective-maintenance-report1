<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
	<script type="text/javascript">
	
  alert("<?php
$conn=mysqli_connect("localhost","root","","pharmacy");
$result=mysqli_query($conn,"SELECT * FROM drug  WHERE expirydate<=NOW()");
 if(mysqli_num_rows($result)>0)
{

			$message=mysqli_num_rows($result);
					echo'There are '.$message.'  Expired drugs. pleas to check the drugs.';

}

mysqli_close($conn);
?>");
</script>;
</head>
<body  style="background-color: #D4E6F1 ;" >
<?php include 'hed.php'?>

 
    
<br><br><br>
<h2>
<P >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
WELL COME TO STOCKKEEPPER </P></h2>
 <div class="col-md-14 profile-pic text-center">
		    <div class="img-box">
<img src="photo/images (1).jpg" width="30%" height="80%">
		   <br>
 </div>  <pre>  <H4 style="color:balck;">
 			<B>ROLES OF STOCKKEEPPER</B><BR>
			RIGISTOR DRUG<BR>
			SEAECH DRUG <BR>
			CHENGE PASSWORD<BR>
			VIEW RESPONSE<BR>
			SEND REPORT<br>
			CHECK Expiry date drug<BR>
		</div>
		</h4>
</pre>
    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  Kibron Pharmacy Management System. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
