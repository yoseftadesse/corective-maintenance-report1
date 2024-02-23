<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "cm");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
if(isset($_POST['search'])){
$SiteEquipID = $_POST['SiteEquipID'];
$sql = "SELECT * FROM report where SiteEquipID = 'SiteEquipID' ";}
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        //echo "<table width="100%")>";

        ?>
        <html>
        <body>
    <table border="1px" cellspacing="2" cellpadding="2">
            <tr>
                <td>Region</td>
                <td>Site/Equip ID</td>
                <td>Site Name</td>
                <td>Network Type</td>
                <td>NE Type</td>
                <td>Parent NE ID</td>
                <td>Vendor</td>
                <td>Fault Criticality (partial...)</td>
                <td>Root cause</td>
                <td>Specific Problem if any</td>
                <td>Occurrence date & Time</td>
                <td>have TT (yes/No)</td>
                <td>TT NO if have TT</td>
                <td>Solved/Not solved</td>
                <td>Expected/ Solved date & time</td>
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
                <td><?php echo  $row['SiteName'] ?> </td>
                <td><?php echo  $row['NetworkType'] ?> </td>
                <td><?php echo  $row['NEType'] ?> </td>
                <td><?php echo  $row['ParentNEID'] ?> </td>
                <td><?php echo  $row['Vendor'] ?> </td>
                <td><?php echo  $row['Fault'] ?> </td>
                <td><?php echo  $row['Rootcause'] ?> </td>
                <td><?php echo  $row['SpecificProblem'] ?></td>
                <td><?php echo  $row['Occurrence'] ?></td>
                <td><?php echo  $row['haveTT'] ?> </td>
                <td><?php echo  $row['TT'] ?> </td>
                <td><?php echo  $row['Solved'] ?> </td>
                <td><?php echo  $row['Expected'] ?> </td>
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
 <table>
 <body>
 </html>