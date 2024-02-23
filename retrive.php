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
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "cm");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM report";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        //echo "<table width="100%")>";
        ?>
        <html>
        <body>
    <table border="1px" cellspacing="2" cellpadding="4">
            <tr>
                <td>Region</td>
                <td>Site/Equip ID</td>
                
                <td>Vendor</td>
                
                <td>Root cause</td>
                <td>Specific Problem if any</td>
                <td>Occurrence date & Time</td>
                
                <td>Solved/Not solved</td>
                
                <td>Responsible person</td>
                <td>emp_id</td>
                <td>Contact NO</td>

            </tr>
            
            <?php
        while($row = mysqli_fetch_array($result)){
            ?>
             <tr>
                <td> <?php echo $row['Region'] ?> </td>
                <td><?php echo  $row['SiteEquipID'] ?> </td>
                <td><?php echo  $row['Vendor'] ?> </td>
                <td><?php echo  $row['Rootcause'] ?> </td>
                <td><?php echo  $row['SpecificProblem'] ?></td>
                <td><?php echo  $row['Occurrence'] ?></td>
                <td><?php echo  $row['Solved'] ?> </td>
                <td><?php echo  $row['Responsibleperson'] ?> </td>
                <td><?php echo  $row['emp_id'] ?> </td>
                <td><?php echo  $row['Contact'] ?> </td>
                
            </tr>
        
        
        <?php
    }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
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
