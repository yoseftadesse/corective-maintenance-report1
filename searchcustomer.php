<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
	<script type="text/javascript">

	function checkvalidation()
{


       
	  var SiteEquipID = document.getElementById('SiteEquipID');
	  
		
		if(document.getElementById("customerid").value =="")
   {
    alert('Please Enter The SiteEquipID  !!'); 
    document.getElementById("SiteEquipID").focus();
    return false;
   }
		 if(lengthRestriction(Region, 1, 10,"for SiteEquipID")){
			

			  return true;
}
						
	return false;
	
}
	
    
function isAlphabet(elem, helperMsg)
	{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else
		{
		alert(helperMsg);
		elem.focus();
		return false;
	}}


function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}



function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


</script>
</head>
<body  style="background-color: #D4E6F1 ;" >
<?php include 'header.php'?>

 

         <br><br>
		  <div class="container-fluid "  style="padding-top:70px; padding-left:200px;">
            	<h3>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Customer Form</h3>


                <div class="col-md-4 offset-md-4 border border-info p-3">
				   
<form action="searchcustomer.php" method="post" name="search" onsubmit="return checkvalidation()">

				                       <div class="form-group form-control">

<b><font size="3px">SiteEquipID:&nbsp;&nbsp;&nbsp;<input type="text"  class="form-control"  name="SiteEquipID" id="SiteEquipID"   size="20%">&nbsp;&nbsp;
</div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="search" class="btn btn-primary"name="search">&nbsp;&nbsp;<input  class="btn btn-primary" type="reset" value="Cancel" name="cancel">
</fieldset>
</form>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
<?php
$conn=mysqli_connect("localhost","root","","cm");
if(isset($_POST['search']))
  {
   $SiteEquipID=$_POST['SiteEquipID'];
  
$result = mysqli_query($conn,"SELECT * FROM report where SiteEquipID='{$SiteEquipID}' ");
echo"<br><br>";
if(mysqli_num_rows($result)>0)
{
echo "<table id='vtable' class='table' border='1'>";
echo"<tr>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Region</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Site/Equip ID</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Vendor</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Root cause</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Specific Problem if any</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Occurrence date & Time</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Solved/Not solved</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Responsible person</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>emp_id</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Contact NO</font></td>";
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
  echo"</table>";
  }
  
  else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">Such network site not found !!</font>'; 
  
   echo '</center>';
   }
  }
  
mysqli_close($conn);
?>
</div></div>
</div></div>
</div></div>

<br>
<br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
