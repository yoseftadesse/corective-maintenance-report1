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
    
    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

<table align="center" width="100% height="100%" border=0 >
<tr><td height=10%  colspan=3>
<img src="new/aaaa.png" width="8%" height="83px"> <img src="nw/43.PNG" width="80%" height="80px"><img src="new/45.jpg" width="10%" height="80px">

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
				
                <a class="navbar-brand" href="manager.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">View Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
				<li><a href="feedback1.php">&nbsp;view feedbak </a></li>
								<li><a href="dis.php">view report from stockkeeper </a></li>
				<li><a href="sendrespons.php">send responses to stockkeeper </a></li>

		<li><a href="searchmanageritem.php">&nbsp;Search drug<font color="red"></a></li>

          </ul>
		  
		  
        </li>

		

                </ul>
				        <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">View Sold Drug Report <span class="caret"></span></a>
          <ul class="dropdown-menu">
	
			     <li><a href="viewsolddrug.php">&nbsp; DAILY REPORT  </a></li>
				 			     <li><a href="weekly.php">&nbsp; WEEKLY REPORT   </a></li>

			     <li><a href="monthly.php">&nbsp; MONTHLY REPORT   </a></li>

			     <li><a href="year.php">&nbsp; YEARLY REPORT  </a></li>


          </ul>
		  
		  
        </li>

		

                </ul>
				     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage user <span class="caret"></span></a>
          <ul class="dropdown-menu">
		  
 	     <li><a href="Rigsteruser.php">&nbsp;Register  user</a></li>
	     <li><a href="user.php">&nbsp;View  user</a></li>
		 	     <li><a href="viewacount.php">&nbsp;View  user account</a></li>
		<li><a href="changepass2.php">&nbsp;Change Password</a></li>
		
</li>

          </ul>
		  
		  
        </li>
<li><a href="logout3.php" id="logout"><b>Logout</a></li>

		

                </ul>
				
            </div><!-- /.navbar-collapse -->
			
        </div><!-- /.container-fluid -->
    </nav>