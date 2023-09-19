<?php
session_start();
 $name=$_SESSION['name'];
	$cid=$_SESSION['cid'];
	$fees=$_SESSION['fees'];
?>
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>


	<?php

require("../../mentor/connection.php");
    $email=$_SESSION['email'];
	
 					  $sql="INSERT INTO educorner_learner_course(course_id, email, name) VALUES ('$cid','$email','$name')";
        // echo $sql;
        
        if($a=mysqli_query($conn,$sql))
        {
            $sql1="SELECT max(course_enrollid) as id from educorner_learner_course WHERE email='$email'";
            $a1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_assoc($a1);
            $id=$row1['id'];
            $sql2="insert into educorner_payment(course_enrollid,paymenttype,amount,pstatus) values ('$id','online','$fees','1')";
            mysqli_query($conn,$sql2);
            // echo $sql2;
           
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Enrollment Success',
                    didClose: () => {
                     window.location.replace('../mycourses.php');
                    }
                });
            </script>
            <?php
        }

		
	?>  



	




	<!-- <script type="text/javascript">

		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Something went wrong!',
		 
		}).then(() => {
			window.location.href="../viewbooks.php";
		})
	</script> -->

</body>
</html>