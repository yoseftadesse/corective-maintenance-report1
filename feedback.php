<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
  <script type="text/javascript">

function  formValidation()
{
        var name = document.getElementById('name');
      var email = document.getElementById('email');
	          var message = document.getElementById('message');

	 
	
		  if(isAlphanumeric( name, "Please fill your user Name ")){
		  if(lengthRestriction(name, 3, 32,"for your user name")){
	
	    // if(isAlphanumeric(email, "enter password")){  
	    if(lengthRestriction(email, 3, 32,"for your password")){
		
			    // if(isAlphanumeric(message, "enter message")){  
	    if(lengthRestriction(message, 3, 32,"for your password")){
		
			 
			 
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

    class="imgf ">       <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

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
                    <li><a href="developers.php"><span class="glyphicon glyphicon-user"></span> developer</a></li >
         <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
			
        </div><!-- /.container-fluid -->
    </nav>
<br><br>
<br>

<br><br>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
<form action="send_comment.php" method="post" onsubmit='return formValidation()'>

          <fieldset>
<br>    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" required="required"  class="form-control">
              </div>
            </div><br><br>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="email"  required="required"  class="form-control">
              </div>
            </div>
    <br><br>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message"  required="required" rows="5"></textarea>
              </div>
            </div>
    <br><br><br><br>
            <!-- Form actions -->
            <center><br><br>
                <button type="submit" class="btn btn-primary btn-lg">Send</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                <button type="reset" class="btn btn-primary btn-lg">Cancel</button>


              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
