
<html>
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
            
        var SiteEquipID = document.getElementById('SiteEquipID');
        
        var Vendor = document.getElementById('Vendor');
            
        
        var Rootcause=document.getElementById('Rootcause');
        var SpecificProblem=document.getElementById('SpecificProblem');
            
        var Occurrence=document.getElementById('Occurrence');
        var Solved=document.getElementById('Solved');
            
        var Responsibleperson=document.getElementById('Responsibleperson');
        var emp_id=document.getElementById('emp_id');
        var Contact=document.getElementById('Contact');
        
    
    
                if( isAlphanumeric( Region, "Please fill Region characters in leters  only")){
         if(lengthRestriction(Region, 1, 30,"for Region ")){
             
          if(isAlphanumeric( SiteEquipID, "Please fill SiteEquipID in letters only")){
          if(lengthRestriction(SiteEquipID, 1, 30,"for the SiteEquipID ")){
    

           if( isNumeric( Vendor, "Please fill Vendor")){
              if(lengthRestriction(Vendor, 1, 30,"for Vendor")){
            
             
            if(isAlphanumeric(Rootcause,"Please fill Rootcause ")){
                if(lengthRestriction(Rootcause,1,20,"please fill Rootcause")){
                    if(isAlphanumeric(SpecificProblem,"Please fill SpecificProblem ")){
                if(lengthRestriction(SpecificProblem,1,20,"please fill SpecificProblem")){
                    if(isAlphanumeric(Occurrence,"Please please fill Occurrence date ")){
                if(lengthRestriction(Occurrence,1,20,"please fill Occurrence")){
                    if(isAlphanumeric(Solved,"Please fill the filed ")){
                if(lengthRestriction(Solved,1,20,"file the filed")){
                    
                    if(isAlphanumeric(Responsibleperson,"Please fill your name ")){
            if(lengthRestriction(Responsibleperson,1,20,"ypur name")){
                if(isAlphanumeric(emp_id,"Please fill your id ")){
            if(lengthRestriction(emp_id,1,20,"fill your id")){
                
             if(isAlphanumeric(Contact,"Please fill you num ")){
            if(lengthRestriction(Contact,1,20,"fill your num")){

          
                
            
            
             
             return true;

                }}} }}} }}}} }}}}}} }}}}

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
<?php include 'tec.php'?>

          <div class="container-fluid "  style="padding-top:90px;padding-left:400px;">
                       <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CM upload form</h3><br>

<?php
$con= mysqli_connect('127.0.0.1','root','');
if (!$con)
{
  echo "not connected to server";

}

if (!mysqli_select_db($con,'cm'))
{
  echo " db is not selected";

}
//$conn=mysqli_connect("localhost","root","","CM");
if(isset($_POST['save']))
{
$Region=$_POST['Region'];
$SiteEquipID=$_POST['SiteEquipID'];
$Vendor=$_POST['Vendor'];
$Rootcause=$_POST['Rootcause'];
$SpecificProblem=$_POST['SpecificProblem'];
$Occurrence=$_POST['Occurrence'];
$Solved=$_POST['Solved'];
$Responsibleperson=$_POST['Responsibleperson'];
$emp_id=$_POST['emp_id'];
$Contact=$_POST['Contact'];
$res=mysqli_query($con,"INSERT INTO report values('$Region','$SiteEquipID','$Vendor','$Rootcause','$SpecificProblem','$Occurrence','$Solved','$Responsibleperson','$emp_id','$Contact') ");
if(!$res)
{ 
echo " data is not inserted";

}
else
 {
echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">thank you! uploaded !!</font>'; 
  
   echo '</center>';
}
}
//mysql_close($conn);
?>
               <div>
                               <center>

                <div class="col-md-4 offset-md-4 border border-info p-3">
                   
                   <form action="cmform.php" method="post" nsubmit='return checkvalidations()'>
                   <div class="form-group form-control">



Region:<select id="category" class="form-control" name="Region"> <option  required="required" value="null" selected="true">select here</option><option >SER</option>
<option>NER</option><option>WR</option>
</select><br><br> </div><br><br>
                    <div class="form-group form-control">

<div>SiteEquipID
<input type="text" class="form-control"  name="SiteEquipID" id="SiteEquipID "required="required" ></div>
                   </div><br><br>
                   
                
                  <div class="form-group form-control">

Vendor:<select id="category" class="form-control" name="Vendor"> <option  required="required" value="null" selected="true">select here</option><option >ZTE</option>
<option>Erecsson</option><option>Huawi</option>
</select><br><br>
                   </div><br><br>                  
                   <div class="form-group form-control">


Rootcause:<input type="text"  class="form-control" name="Rootcause" id="Rootcause"   required="required" size="20%">
                   </div><br><br>
                   
<div class="form-group form-control">


SpecificProblem:<input type="text"  class="form-control" name="SpecificProblem" id="SpecificProblem"   required="required" size="20%">
                   </div><br><br>

 <div class="form-group form-control">


Occurrence:&nbsp;&nbsp;<input type="date"  class="form-control" name="Occurrence" id="Occurrence"   required="required" size="20%">
                   </div><br><br>



<div class="form-group form-control">


Solved:<select id="category" class="form-control" name="Solved"> <option  required="required" value="null" selected="true">select here</option><option >yes</option>
<option>no</option>
</select><br><br>
</div><br><br>
<div class="form-group form-control">


Responsibleperson:<input type="text"  class="form-control" name="Responsibleperson" id="Responsibleperson"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


emp_id:<input type="number"  class="form-control" name="emp_id" id="emp_id"   required="required" size="20%">
                   </div><br><br>

<div class="form-group form-control">


Contact:<input type="number"  class="form-control" name="Contact" id="Contact"   required="required" size="20%">
                   </div><br><br>                  
                   
                   
            
                   
<input type="submit" value="Upload CM report"  class="btn btn-primary" name="save" >




</form></div></center></div></div>


<footer class="container-fluid"><br>
<br>

        Copyright &copy 2019  WBCMRS FOR ETHIOTELECOM. All Rights Reserved
    </footer>
    <!--Footer End-->

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
</body></table></html>
