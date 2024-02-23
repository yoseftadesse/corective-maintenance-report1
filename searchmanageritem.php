<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
	<script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.css">
<script type='text/javascript'>
function checkvalidation()
{


       
  var category  = document.getElementById('category');
	  
		if(document.getElementById("category").value =="")
   {
    alert('Please select The drug category  !!'); 
    document.getElementById("category").focus();
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

<body style="background: #D4E6F1; padding-left:100px;">
<?php include 'head.php'?>


<div class="container-fluid "  style="padding-top:100px">
			   <h3>search drug form</h3>

                <div class="col-md-2 offset-md-4 border border-info p-3">
				   
<form action="searchmanageritem.php" method="post" name="printtt" onsubmit="return checkvalidation()">
 <div class="form-group form-control">

Category:&nbsp;&nbsp <select  class="form-control"id="category" name="category"> <option > </option><option >Antidiabetics</option><option >Antibiotics</option>
<option>Antifungals</option><option>Anthementhics</option>
<option >Antiprotozoals</option><option >Antivirals</option>
<option>Anti-fungals</option><option>Hormonal prepa..</option></select><br>
</div>
<!--b><font size="3px">category:&nbsp;&nbsp;&nbsp;<input type="text" name="category" id="category"  placeholder="..category.." size="20%"-->&nbsp;&nbsp;<br>

<input type="submit" value="search" name="search">&nbsp;&nbsp;<input type="reset" value="Cancel" name="cancel"></p>

</form>

  
<div class="container">
  <div class="row">
    <div class="col-xs-15">
      <div class="table-responsive">
<table border="10" bgcolor="white" width='420' height="300"  class="table table-bordered table" summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">

<tr>
<td>

<?php
$conn=mysqli_connect("localhost","root","","pharmacy");
if(isset($_POST['search']))
  {
   $category=$_POST['category'];
  
$result = mysqli_query($conn,"SELECT * FROM drug where category='{$category}' ");
echo"<br><br>";
if(mysqli_num_rows($result)>0)
{
	
echo "<table class='table'>";
echo"<tr>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Acount-&nbsp;Id</font></th>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Drugmname</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Companyname</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Shelfnumber</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Category</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Unite&nbsp;price</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Bach&nbsp;number</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Quantity</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Manufa&nbsp;date</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='black'>Expiry&nbsp;date</font></td>";
echo"</tr>";
while($row = mysqli_fetch_array($result))
  {
 echo "<tr>";
  echo "<td>" . $row['accountid'] . "</td>";
echo "<td>" . $row['drugname'] . "</td>";
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['shelfnumber'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['unitprice'] . "</td>";
echo "<td>" . $row['bachnumber'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['manufacturedate'] . "</td>";
echo "<td>" . $row['expirydate'] . "</td>";
//echo" <input type='button' value='Print Page' Onclick='window.print()' align='center' style='margin-center:-420px'/></font>";

  echo "</tr>";
 } 
  echo"</table>";
  }
  
  else{
   echo '<center>';
echo '<font face="monotype corsiva" size="5"color="red">Such search drug not found !!</font>'; 
  
   echo '</center>';
   }
  }
  
mysqli_close($conn);
?>
</table>
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='viewitem.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019  WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
