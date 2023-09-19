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
$Reviewdate=date('Y-m-d');
$Review=$_POST['revieew'];
$Rating=$_POST['rate'];
$sql="INSERT INTO educorner_rerview(learner_email, date_review, review, rating) VALUES ('$email','$Reviewdate','$Review','$Rating')";

if(mysqli_query($conn,$sql))


{
     ?>

         <script>
        Swal.fire({
            icon: 'success',
            text: 'Review Provided !!',
            didClose: () => {
                window.location.replace('../review.php');
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
            text: 'Not Review !!!',
            didClose: () => {
                window.location.replace('../review.php');
            }
        });
    </script>
    <?php
}


?>


