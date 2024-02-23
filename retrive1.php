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
<h3>cm report</h3>

                <div class="col-md- offset-md-4 border border-info p-3">
				<div class="container">

  <div class="row">
    <div class="col-xs-14">
      <div class="table-responsive">
         <br><br>
<?php
$conn=mysqli_connect("localhost","root","","cm");
$result = mysqli_query($conn,"SELECT * FROM report");
if(mysqli_num_rows($result)>0)
{
echo "<table class='table' style='background:white;color:#7e8181'>";
echo"<tr>";
echo"<th><font color='red'>Region</font></th>";
echo"<th><font color='red'>Site/Equip ID</font></th>";
echo"<th><font color='red'>Vendor</font></th>";
echo"<th><font color='red'>Root cause</font></th>";
echo"<th><font color='red'>Specific Problem if any</font></th>";
echo"<th><font color='red'>Occurrence date & Time</font></th>";
echo"<th><font color='red'>Solved/Not solved</font></th>";
echo"<th><font color='red'>Responsible person</font></th>";
echo"<th><font color='red'>emp_id</font></th>";
echo"<th><font color='red'>Contact NO</font></th>";
echo"</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 
echo "<td>" . $row['Region'] . "</td>";
echo "<td>" . $row['SiteEquipID'] . "</td>";
echo "<td>" . $row['Vendor'] . "</td>";
echo "<td>" . $row['Rootcause'] . "</td>";
echo "<td>" . $row['SpecificProblem'] . "</td>";
echo "<td>" . $row['Occurrence'] . "</td>";
echo "<td>" . $row['Solved'] . "</td>";
echo "<td>" . $row['Responsibleperson'] . "</td>";
echo "<td>" . $row['emp_id'] . "</td>";
echo "<td>" . $row['Contact'] . "</td>";
echo "</tr>";
  }
echo "</table>";
}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">recored not found !!</font>'; 
  
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

    <footer class="container-fluid"><br>
<br>

        Copyright &copy 2019  WBCMRS FOR ETHIOTELECOM. All Rights Reserved
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
