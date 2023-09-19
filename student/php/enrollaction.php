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
    $email=$_SESSION['email'];


       
    
    if($_POST['paymentmode']=='offline')
    {
         $name=$_POST['name'];
        $cid=$_POST['cid'];
        $fees=$_POST['fees'];
        



        $sql="INSERT INTO educorner_learner_course(course_id, email, name) VALUES ('$cid','$email','$name')";
        // echo $sql;
        
        if($a=mysqli_query($conn,$sql))
        {
            $sql1="SELECT max(course_enrollid) as id from educorner_learner_course WHERE email='$email'";
            $a1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_assoc($a1);
            $id=$row1['id'];
            $sql2="insert into educorner_payment(course_enrollid,paymenttype,amount) values ('$id','cod','$fees')";
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
    }
    else 
    {
        $_SESSION['name']=$_POST['name'];
        $_SESSION['cid']=$_POST['cid'];
        $_SESSION['fees']=$_POST['fees'];
        
        
        ?>
       <script>
        let timerInterval
        Swal.fire({
          title: 'Online Payment',
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
                window.location.replace('../pay.php');

          }
        })
    </script>

        <?php
    }
?>
</body>
</html>