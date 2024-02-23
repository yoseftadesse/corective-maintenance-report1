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
$con = mysqli_connect("localhost", "root", "", "cm");
 $set=$_POST['search'];
 if($set){
 	$show="SELECT * FROM report WHERE SiteEquipID = '$set' ";
 	$result=mysqli_query($con,$show);

 
		while($rows = mysqli_fetch_array($result)){
		echo "<tr>";
             echo "<td>"; 
                 echo $rows['Region'];
                   echo "</td>"; 
                echo "<td>"; 
                echo  $rows['SiteEquipID'];
                  echo "</td>"; 
                echo "<td>"; 
                echo  $rows['SiteName'];
                  echo "</td>"; 
                echo "<td>";
                echo  $rows['NetworkType'];
                  echo "</td>"; 
                echo "<td>"; 
                echo  $rows['NEType'];
                 echo "</td>";
                echo "<td>";
                 echo  $rows['ParentNEID'];
                   echo "</td>"; 
                echo "<td>"; 
                echo  $rows['Vendor'];
                 echo "</td>";
                echo "<td>";
                 echo  $rows['Fault'];
                  echo "</td>";
                echo "<td>";
                 echo  $rows['Rootcause'];
                   echo "</td>";
                echo "<td>"; 
                echo  $rows['SpecificProblem'];
                 echo "</td>";
                echo "<td>"; 
                echo  $rows['Occurrence'];
                 echo "</td>";
                echo "<td>"; 
                echo  $rows['haveTT'];
                  echo "</td>";
                echo "<td>"; 
                echo  $rows['TT'];
                  echo "</td>";
                echo "<td>";
                echo  $rows['Solved'];
                  echo "</td>";
                echo "<td>"; 
                echo  $rows['Expected'];
                  echo "</td>";
                echo "<td>";
                 echo  $rows['Responsibleperson'];
                   echo "</td>";
                echo "<td>";
                 echo  $rows['emp_id'];
                   echo "</td>";
                echo "<td>"; 
                echo  $rows['Contact']; 
                echo "</td>";
                
            echo "</tr>";

			}
		}
		else {
			echo "nothing";
		}
	
?>
</table>