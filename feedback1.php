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
<?php include 'head.php'?>

 <div class="container-fluid "  style="padding-top:100px; ">
                                <center>
<h3>view feedback</h3>

                <div class="col-md- offset-md-4 border border-info p-3">
				<div class="container">

  <div class="row">
    <div class="col-xs-14">
      <div class="table-responsive">
         <br><br>
<?php
$conn=mysqli_connect("localhost","root","","cm");
$result = mysqli_query($conn,"SELECT * FROM comment");
if(mysqli_num_rows($result)>0)
{
echo "<table class='table' style='background:white;color:#7e8181'>";
echo"<tr>";
echo"<th><font color='red'>USER_Name</font></th>";
echo"<th><font color='red'>Email</font></th>";
echo"<th><font color='red'>message</font></th>";
echo"<th><font color='red'>delete</font></th>";

echo"</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
					$ctrl = $row['email'];

echo"<td align = 'center' width = '1'><a href = 'delete.php?key=".$ctrl."'><img width='25px' height='25px' src = 'h/actions-delete.png' title='Delete' onclick='deletes();'></img></a></td>";

  echo "</tr>";
  }
echo "</table>";
}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">comment not found !!</font>'; 
  
   echo '</center>';
   }
mysqli_close($conn);
?>
</div></div>
</div>
</div>
</div>
</div>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<br>
<script>
  function deletes()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='feedback1.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
    <footer class="container-fluid"><br>
<br>

        Copyright &copy 2019  WBCMRS FOR ETHIOTELECOM. All Rights Reserved
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
