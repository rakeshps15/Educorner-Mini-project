<?php
session_start();
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
	$cid=$_GET['id'];
	
	$sql="update educorner_faculty_course set status='1' where course_id='$cid';";

	if($a=mysqli_query($conn,$sql))
	{
	   ?>
	     <script>
            Swal.fire({
                icon: 'success',
                text: 'Marked as Completed',
                didClose: () => {
                    window.location.replace('../completedcourse.php');
                }
            });
        </script>

	     <?php
	}   
	else
	{
		?>
			<script>
				alert("Error");
				window.location.href="../";
			</script>
		<?php
	}
?>

</body>
</html>