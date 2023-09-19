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
$subjectName=$_POST["subject"];
$subres="insert into educorner_subject (subject_name) values '$subjectName'";
if (insert($subres)) {
	?>
		<script>
			alert("success");
		</script>

	<?php
	}

