<html>
<head>
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.css">
</head>
<body style="background-color:#483d8b";>

<script>
swal({
  title: "are you sure you want  to exit ?",
  //text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "RGB(123,80,23)",
  confirmButtonText: "Yes",
  cancelButtonText: "NO",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("thank you!", "logedout succesfully.", "success");
  window.location='logout.php';
  } else {
    swal("Cancelled", "Cancel", "error");
    window.location='manager.php';

  }
});
</script>
</body>
</html>