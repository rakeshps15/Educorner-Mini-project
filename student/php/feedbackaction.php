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


$Feedbackdate=date('Y-m-d');
$Feedback=$_POST['feedback'];
$sql="INSERT INTO educorner_feedback(feedback,feedback_date,faculty_email,learner_email) VALUES ('$Feedback','$Feedbackdate','$email','$email')";

if(mysqli_query($conn,$sql))


{
     ?>

         <script>
        Swal.fire({
            icon: 'success',
            text: 'Feedback Registered !!',
            didClose: () => {
                window.location.replace('../profile.php');
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
                window.location.replace('../feedback.php');
            }
        });
    </script>
    <?php
}


?>


