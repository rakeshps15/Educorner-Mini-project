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

    $SubjectName=$_POST["subject"];
   //  echo "subject=".$SubjectName;
   //  echo "<br>";

    $subres = "insert into educorner_subject(subject_name) values ('$SubjectName')";
    if(insert($subres))
    {
      ?>
      <script>
      alert("Success");
      window.location.replace("../addsubjects.php");
    </script>
    <?php
    }
    ?>