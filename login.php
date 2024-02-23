
<?php 
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">

function  formValidation()
{


        var username = document.getElementById('username');
      var password = document.getElementById('password');
	    
	 
	
		  if(isAlphanumeric( username, "Please fill your user Name ")){
		  if(lengthRestriction(username, 3, 32,"for your user name")){
	
	     if(isAlphanumeric(password, "enter password")){  
	    if(lengthRestriction(password, 3, 32,"for your password")){
		
			 
return true;
}}}}
				
	return false;
	
}
	
	function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max, helperMsg){
	var uinput = elem.value;
	if(uinput.length >= min && uinput.length <= max){
		return true;
	}
	else{
		alert("Please enter between " +min+ " and " +max+ "" +helperMsg);
		elem.focus();
		return false;
	}
}


function madeSelection(elem, helperMsg){
	if(elem.value ==""){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}

</script>
</head>
<body style="background: #D4E6F1;">

  

    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

<table align="center" width="100% height="100%" border=0 >
<tr><td height=10%  colspan=3>
<img src="new/aaaa.png" width="8%" height="84px"> <img src="new/43.PNG" width="80%" height="80px"><img src="new/45.jpg" width="10%" height="80px">

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
                    <li><a href="developers.php"><span class="glyphicon glyphicon-user"></span> developer</a></li >
                </ul>
            </div><!-- /.navbar-collapse -->
			
        </div><!-- /.container-fluid -->
    </nav>
   
<br><br><br><br><br>

  <div class="modal-dialog text-center">
  	<div class="col-sm-6 main-section">
  		<div class="modal-content">

  			<div class="col-9 user-img">
  				<img src="h/STUd.jpg">
  			</div>
  			<div class="col-12 form-input">
<form action="Login.php" method="post" onsubmit='return formValidation()'><br>
  					<div class="form-group">
  						<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
  					</div>
  					<div class="form-group">
  						<input type="password"  id="password"name="password" class="form-control" placeholder="Enter Password">
  					</div>
				
  					<button type="submit" name="login" class="btn btn-success">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;
					<input   class="btn btn-success"type="reset" value="Cancel" name="cancel">
  				</form>
  			</div>

<?php
$conn=mysqli_connect("localhost","root","","cm");
 if(isset($_POST['login']))
 {
   $uname=$_POST['username'];
   $password =$_POST['password'];
   $result_set=mysqli_query($conn,"SELECT * FROM account WHERE   username = '{$uname}' AND password = '{$password}' ")or die(mysqli_error);
   $row=mysqli_fetch_array($result_set);
   $user=$row['position'];

  
if(mysqli_num_rows($result_set)>0)
{
if($user=='manager')
{
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='manager.php';</script>";
}
else if($user=='supervisor')
{
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='supervisor.php';</script>";
}
else if($user=='techenician')
{
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='techenician.php';</script>";
}
}
else
   {
	
 echo"  <font color='green'><p class='wrong'>User Name and password not match!</p></font>";
 echo' <meta content="3;login.php" http-equiv="refresh" />';
   } 
}
mysqli_close($conn);
?>
 
  			<div class="col-12 link-part">
  			</div>

  		</div>
  	</div>
	
	  </div


</div>

</div>
<br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>


    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
