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
	$pid=$_GET['id'];

	$ccc=$_SESSION['ccc'];
	
	$sql="update educorner_payment set pstatus='1' where paymentid='$pid';";

	// echo $sql;

	if($a=mysqli_query($conn,$sql))
	{
	   ?>
	     <script>
            Swal.fire({
                icon: 'success',
                text: 'Marked as Completed',
                didClose: () => {
                   window.location.replace('../registred.php?cid=<?php echo $ccc;?>');
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