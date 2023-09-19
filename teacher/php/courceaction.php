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
    $Startdate=$_POST["date"];
    // echo "email=".$email;
   //  echo "subject=".$SubjectName;
   //  echo "<br>";
   $target_dir = "../../coursepic/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            text: 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.',
            didClose: () => {
                window.location.replace('../index.php');
            }
        });
    </script>
    <?php
  $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            text: 'Sorry, your file is too large.',
            didClose: () => {
                window.location.replace('../index.php');
            }
        });
    </script>
    <?php
    $uploadOk = 0;
}
if ($uploadOk == 0)
{

}
else
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
  {

    $subres = "insert into educorner_faculty_course(course_title,course_description,course_duration,course_fees,course_syllabus,course_mode,startdate,email) values ('$CourseTittle','$Description','$CourseDuration','$CourseFees','$CourseSyllabus','$CourseMode','$startdate',$email')";
    if(insert($subres))
    {
      ?>
      <script>
      alert("Success");
      window.location.replace("../courselist.php");
    </script>
    <?php
    }
    ?>
    if(mysqli_query($conn,$sql))
        {
        
         ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Profile Updated',
                    didClose: () => {
                        window.location.replace('../student/../courselist.php');
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
                        window.location.replace('../profile.php');
                    }
                });
            </script>
            <?php
        }

    } 

    else 
    {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  ?>

  