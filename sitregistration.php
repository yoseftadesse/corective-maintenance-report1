<?php
	include("conn.php");  
 
			
			?><html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
</head>
<script type="text/javascript">

	function checkvalidations()
{
	 
        var Region = document.getElementById('Region');
            var category = document.getElementById('category');
        var SiteEquipID = document.getElementById('SiteEquipID');
        var SiteName = document.getElementById('SiteName');
	   var NetworkType = document.getElementById('NetworkType');
		   
	    var NEType = document.getElementById('NEType');

	        var category = document.getElementById('category');
		var Vendor = document.getElementById('Vendor');
		    var category = document.getElementById('category');
		var Fault = document.getElementById('Fault');
		    var category = document.getElementById('category');
		var Rootcause=document.getElementById('Rootcause');
		var haveTT=document.getElementById('haveTT');
		    var category = document.getElementById('category');
		var TT=document.getElementById('TT');
		var Solved=document.getElementById('Solved');
		    ar category = document.getElementById('category');
		var Expected=document.getElementById('Expected');
		var Responsibleperson=document.getElementById('Responsibleperson');
		var emp_id=document.getElementById('emp_id');
		var Contact=document.getElementById('Contact');
		
	
	
				if( isAlphanumeric( Region, "Please fill accountid characters in leters  only")){
		 if(lengthRestriction(Region, 1, 30,"for accountid ")){
			 
		  if(isAlphanumeric( SiteEquipID, "Please fill item name in letters only")){
		  if(lengthRestriction(SiteEquipID, 1, 30,"for the item name")){
	

		 if( isAlphabet( SiteName, "Please fill company name in leters only")){
		 if(lengthRestriction(SiteName, 3, 30,"for company name")){

			if( isAlphanumeric( NetworkType, "Please fill bach characters in leters  only")){
		 if(lengthRestriction(NetworkType, 1, 30,"for bach number")){
			
			  if( isNumeric( NEType, "Please fill quantity in numbers only")){
		 if(lengthRestriction(NEType, 1, 30,"for the quantity")){

			 if( isNumeric( Vendor, "Please fill price in numbers only")){
		 if(lengthRestriction(Vendor, 1, 30,"for price")){
			
			 if( isNumeric( Fault, "Please fill shelf number in numbers only")){
		 if(lengthRestriction(Fault, 1, 30,"for shelf number")){
		 	if(isAlphanumeric(Rootcause,"Please select Date time picerker ")){
		 		if(lengthRestriction(Rootcause,1,20,"manufacturedate")){
		 			if(isAlphanumeric(haveTT,"Please select Date time picerker ")){
		 		if(lengthRestriction(haveTT,1,20,"manufacturedate")){
		 			if(isAlphanumeric(TT,"Please select Date time picerker ")){
		 		if(lengthRestriction(TT,1,20,"manufacturedate")){
		 			if(isAlphanumeric(Solved,"Please select Date time picerker ")){
		 		if(lengthRestriction(Solved,1,20,"manufacturedate")){
		 			if(isAlphanumeric(Expected,"Please select Date time picerker ")){
		 		if(lengthRestriction(Expected,1,20,"manufacturedate")){
		 			if(isAlphanumeric(Responsibleperson,"Please select Date time picerker ")){
		 	if(lengthRestriction(Responsibleperson,1,20,"manufacturedate")){
		 		if(isAlphanumeric(emp_id,"Please select Date time picerker ")){
		 	if(lengthRestriction(emp_id,1,20,"manufacturedate")){
		 		


          
		 		
		 	
			
			 
			 return true;

				}}} }}} }}}} }}}}}} }}}}}}}}}}}}

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

<body style="background: #D4E6F1;">


          <div class="container-fluid "  style="padding-top:90px;padding-left:400px;">
		  			   <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CM upload form</h3><br>

               <div>
                               <center>

                <div class="col-md-4 offset-md-4 border border-info p-3">
				   
				   <form action="sitregistration.php" method="post" name="register"onsubmit='return checkvalidations()'>
				   <div class="form-group form-control">

<div>Region
<input type="text" class="form-control"  name="Region" id="Region "  required="required"></div>
                   </div><br><br>
                    <div class="form-group form-control">

<div>SiteEquipID
<input type="text" class="form-control"  name="SiteEquipID" id="SiteEquipID "required="required" ></div>
                   </div><br><br>
				   <div class="form-group form-control">

SiteName:<input type="text" name="SiteName" id="SiteName"  class="form-control" required="required"><br><br>
                   </div><br><br>
                    <div class="form-group form-control">

<b>NetworkType <input type="text" class="form-control"  name="NetworkType" id="NetworkType"   required="required"><br><br>
                   
                   </div><br><br>				   <div class="form-group form-control">

Category:<select id="category" class="form-control" name="category"> <option  required="required" value="null" selected="true">Antidiabetics</option><option >Antibiotics</option>
<option>Antifungals</option><option>Anthementhics</option>
<option >Antiprotozoals</option><option >Antivirals</option>
<option>Anti-fungals</option><option>Hormonal prepa..</option></select><br><br>
                   </div><br><br>				   <div class="form-group form-control">

NEType<input type="number" name="NEType" id="NEType"   class="form-control"  required="required"size="20%">
                   </div><br><br>
				   <div class="form-group form-control">

ParentNEID:<input type="number" name="ParentNEID" id="ParentNEID"class="form-control"   required="required" size="20%">       
                   </div><br><br>
				   <div class="form-group form-control">

Vendor:<input type="text" name="Vendor" id="Vendor"class="form-control"    required="required"size="20%">
                   </div><br><br>
				   <div class="form-group form-control">

Fault :<input type="date" name="Fault" class="form-control"  id="Fault"   required="required" size="20%">
                   </div><br><br>
				   <div class="form-group form-control">


Rootcause:&nbsp;&nbsp;<input type="date"  class="form-control" name="Rootcause" id="Rootcause"   required="required" size="20%">
                   </div><br><br>
				   
<div class="form-group form-control">


SpecificProblem:&nbsp;&nbsp;<input type="date"  class="form-control" name="SpecificProblem" id="SpecificProblem"   required="required" size="20%">
                   </div><br><br>

 <div class="form-group form-control">


Occurrence:&nbsp;&nbsp;<input type="date"  class="form-control" name="Occurrence" id="Occurrence"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


haveTT:&nbsp;&nbsp;<input type="date"  class="form-control" name="haveTT" id="haveTT"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


TT:&nbsp;&nbsp;<input type="date"  class="form-control" name="TT" id="TT"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


Solved:&nbsp;&nbsp;<input type="date"  class="form-control" name="Solved" id="Solved"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


Expected:&nbsp;&nbsp;<input type="date"  class="form-control" name="Expected" id="Expected"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


Responsibleperson:&nbsp;&nbsp;<input type="date"  class="form-control" name="Responsibleperson" id="Responsibleperson"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


emp_id:&nbsp;&nbsp;<input type="date"  class="form-control" name="emp_id" id="emp_id"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


Contact:&nbsp;&nbsp;<input type="date"  class="form-control" name="Contact" id="Contact"   required="required" size="20%">
                   </div><br><br>				   
				   
				   
			
				   
<input type="submit" value="Upload CM report"  class="btn btn-primary" name="register" >
<?php
$conn=mysqli_connect("localhost","root","","CM");
if(isset($_POST['register']))
{
	$Region=$_POST['Region'];
$SiteEquipID=$_POST['SiteEquipID'];
$SiteName=$_POST['SiteName'];
$NetworkType=$_POST['NetworkType'];
$NEType=$_POST['NEType'];
$ParentNEID=$_POST['ParentNEID'];
$Vendor=$_POST['Vendor'];
$Fault=$_POST['Fault'];
$Rootcause=$_POST['Rootcause'];
$SpecificProblem=$_POST['SpecificProblem'];
$Occurrence=$_POST['Occurrence'];
$haveTT=$_POST['haveTT'];
$TT=$_POST['TT'];
$Solved=$_POST['Solved'];
$Responsibleperson=$_POST['Responsibleperson'];
$emp_id=$_POST['emp_id'];
$Contact=$_POST['Contact'];
$res=mysqli_query($conn,"INSERT INTO drug values('$Region','$SiteEquipID','$SiteName','$NetworkType','$NEType','$ParentNEID','$Vendor','$Fault','$Rootcause','$SpecificProblem','$Occurrence$haveTT','$haveTT','$TT','$Solved','$Responsibleperson','$emp_id','$Contact') ");

if(!$res)
	{

echo"<font color='green'><p class='wrong'>Insertion failed!!!</p></font>";
echo' <meta content="3;registeritem.php" http-equiv="refresh" />';
	}
	else
	{

echo"<font color='green'><p class='right'>You have succefully registered drug in to your data base!!!</p></font>";
echo' <meta content="3;registeritem.php" http-equiv="refresh" />'; 
	}
}
mysqli_close($conn);
?>
<input type="reset" value="Cancel" name="cancel"  class="btn btn-primary">
                   </form>
                </div>
               </div>
            </div>
 </center>



    <footer class="container-fluid"><br>
<br>

        <p>Copyright &copy 2019 WBCMS FOR ETHIOTELECOM. All Rights Reserved</p>
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body>
</html>
