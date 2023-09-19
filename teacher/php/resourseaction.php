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
    $date1=$_POST["date1"];
    $url=$_POST["url"];
    $title=$_POST["title"];
    $topic=$_POST["topic"];
    $description=$_POST["description"];


    $subres = "INSERT INTO educorner_course_materials(course_id, title, url, `date`, description, topic) VALUES ('$courseid','$title','$url','$date1','$description','$topic')";
   
    if(insert($subres))
    {
      ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Material Uploaded',
                    didClose: () => {
                        window.location.replace('../coursedetails.php?id=<?php echo $courseid;?>');
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

  