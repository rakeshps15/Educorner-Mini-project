<?php
session_start();
require("../../mentor/connection.php");

?>
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>


  <?php 


  $cid=$_POST['cid'];
  $qn=$_POST['qno'];
  $ans=$_POST['answer'];

  $email=$_SESSION['email'];

  $sql="INSERT INTO educorner_testresult(qid, user_id, answer) VALUES ('$qn','$email','$ans');";
  // echo $sql;


  $xx=insert($sql);

  $qn=$qn+1;
  echo $qn;




  $count=$_SESSION['count'];

  echo $count;

  if($qn<=$count)
  {
    echo "<script>let timerInterval
        Swal.fire({
          title: 'Submitting Response',
          html: 'Do Not Refresh',
          timer: 1000,
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
                window.location.replace('../testspace.php?id=$cid&qn=$qn;');

          }
        })
        </script>";
  
  }
  else
  {

    echo "<script>let timerInterval
        Swal.fire({
          title: 'Test Completed',
          html: 'Test Submitted',
          timer: 1000,
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
                window.location.replace('../completedcourses.php?id=$cid&qn=$qn;');

          }
        })
        </script>";

  }


  

  ?>

	

</body>
</html>