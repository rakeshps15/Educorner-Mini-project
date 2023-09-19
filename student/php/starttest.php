<?php
session_start();
require("../../mentor/connection.php");
 $id=$_GET['id'];

?>
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>


	<?php
    $qn=1;

    $qc=select("select count(*) as count from educorner_test where course_id='$id';");
    $rr=mysqli_fetch_assoc($qc);
    // $count=
    $_SESSION['count']=$rr['count'];
	?>  

    <script>
        let timerInterval
        Swal.fire({
          title: 'Setting Test Space',
          html: 'Do Not Refresh',
          timer: 2000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft()
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
                window.location.replace('../testspace.php?id=<?php echo $id;?>&qn=<?php echo $qn;?>');

          }
        })
    </script>



	




	

</body>
</html>