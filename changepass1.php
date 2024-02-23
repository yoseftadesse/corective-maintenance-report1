<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
</head>
<body style="background: #D4E6F1;">
<?php include 'hed.php'?>

 

          <br><br>   
		  <div class="container-fluid "  style="padding-top:90px; padding-left:400px;">
		  <h2>&nbsp;&nbsp;&nbsp;&nbsp;chenge password </h2>
               <div>
                              
<center>    
                <div class="col-md-4 offset-md-4 border border-info p-3">
<form action="changepass3.php" method="post" name="change" onsubmit="return checkvalidation()">
 <div class="form-group form-control">
  Old Password:	  
		<input type="password"  class="form-control" name="old_password" required x-moz-errormessage="Enter Old password" > </div ><br>
	     <div class="form-group form-control">

 New Password: 

<input type="password"  class="form-control" name="new_password" required x-moz-errormessage="Enter New Password" ></div><br>
	     <div class="form-group form-control">
 Confirm Password:
	<input type="password" class="form-control"  name="confirm_password" required x-moz-errormessage="Re-type your Password" >
  </div ><br>
 
<input  type="submit" name="changepassword" value="Change" class="btn btn-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;
					<input   class="btn btn-primary"type="reset" value="Cancel" name="cancel">

</form>
</div>
               </div>
            </div>





<?php
if(isset($_POST['changepassword']))
{
	//include('connection.php');
$oldpass = $_POST['old_password'];
$newpass = $_POST['new_password'];
$confirmpass = $_POST['confirm_password'];
$conn=mysqli_connect("localhost","root","","cm");
if(!$conn){
die("error connection to db server".mysqli_error());
}

$result=mysqli_query($conn,"select * from account where password='{$oldpass}' ");
if(!$result){
die("query faile".mysqli_error());
}
if(mysqli_num_rows($result)){
    if($newpass!=$confirmpass){
	       echo'  <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
		   echo' <meta content="5;changepass3.php" http-equiv="refresh" />';
		   }
		   else
		   {
        $result=mysqli_query($conn,"update account set password='{$newpass}' where password='{$oldpass}'");
		 echo'  <p class="success"> Your password has been changed successfuly!</p>';
         echo' <meta content="5;login.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo'  <p class="wrong">Wrong Old password!</p>';
 echo' <meta content="5;changepass1.php" http-equiv="refresh" />';
}
}
?>
<br><br><br><br><br><br><br><br><br><br><br>
    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
