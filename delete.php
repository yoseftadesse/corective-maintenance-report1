
<?php
session_start();
include 'conn.php';

$ctrl = $_REQUEST['key'];

mysqli_query($conn, "DELETE from comment  WHERE email = '$ctrl'");
mysqli_close($conn);

print "<script>location.href = 'feedback1.php'</script>";
?>