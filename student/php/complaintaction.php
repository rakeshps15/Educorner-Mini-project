<?php
require("../../mentor/connection.php");
session_start();

?>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>

<?php

$email=$_SESSION['email'];
$title=$_POST['title'];
$complaint=$_POST['complaint'];
$priority=$_POST['priority'];
$date=date('Y-m-d');

  $sql="INSERT INTO educorner_complaint(email, title, complaint, priority, date) VALUES ('$email','$title','$complaint','$priority','$date')";
    
if(mysqli_query($conn,$sql))


{
     ?>

         <script>
        Swal.fire({
            icon: 'success',
            text: 'Complaint Registered !!',
            didClose: () => {
                window.location.replace('../complaint.php');
            }
        });
    </script>
     <?php
}
else
{
    ?>
  <script>
        Swal.fire({
            icon: 'error',
            text: 'Complaint Not Registered !!!',
            didClose: () => {
                window.location.replace('../complaint.php');
            }
        });
    </script>
    <?php
}


?>


