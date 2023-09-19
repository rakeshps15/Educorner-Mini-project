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
    $CourseTittle=$_POST["subject"];
    $Description=$_POST["description"];
    $CourseSyllabus=$_POST["syllabus"];
    $CourseDuration=$_POST["duration"];
    $CourseFees=$_POST["fees"];
    $CourseMode=$_POST["mode"];
    $startdate=$_POST["date"];
  


    $subres = "insert into educorner_faculty_course(course_title,course_description,course_duration,course_fees,course_syllabus,course_mode,startdate,email) values ('$CourseTittle','$Description','$CourseDuration','$CourseFees','$CourseSyllabus','$CourseMode','$startdate','$email')";
   
    if(insert($subres))
    {
      ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Profile Updated',
                    didClose: () => {
                        window.location.replace('../mangecourse.php');
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
                    window.location.replace('../mangecourse.php');
                }
            });
        </script>
        <?php
    }

    
  ?>
</body>
</html>

  