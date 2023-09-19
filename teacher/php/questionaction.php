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

    $courseid=$_POST['courseid'];
    $qno=$_POST['qno'];
    $question=$_POST["question"];
    $marks=$_POST["marks"];
   


    $subres = "INSERT INTO educorner_test(qno,course_id, question, marks) VALUES ('$qno','$courseid','$question','$marks')";
   
    if(insert($subres))
    {
      ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Question Uploaded',
                    didClose: () => {
                        window.location.replace('../test.php?id=<?php echo $courseid;?>');
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
                text: 'Error Occurred',
                didClose: () => {
                   // window.location.replace('../coursedetails.php?id=<?php echo $courseid;?>');
                }
            });
        </script>
        <?php
    }

    
  ?>
</body>
</html>

  