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

$email = $_SESSION['email'];          
$firstname = $_POST["fName"];
$lastname = $_POST["lName"];
$Address = $_POST["Address"];  
$State = $_POST["State"];
$District = $_POST["District"];
$City = $_POST["city"];
echo "fName=".$firstname;
echo "<br>";
echo "lName=".$lastname;
echo "<br>";
echo "Address=".$Address;
echo "<br>";
echo "State=".$State;
echo "<br>";
echo "district=".$District;
echo "<br>";
echo"city=".$City;
echo "<br>";
echo "email=".$email;

$target_dir = "../../profilepic/";
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
                window.location.replace('../profile.php');
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
                window.location.replace('../profile.php');
            }
        });
    </script>
    <?php
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql="update educorner_registration SET fName='$firstname', lName='$lastname', house_name='$Address', State='$State', district='$District', city='$City',pic='$filename' WHERE email='$email'";


        if(mysqli_query($conn,$sql))
        {
        
         ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Profile Updated',
                    didClose: () => {
                        window.location.replace('../profile.php');
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

    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }






?>
</body>
</html>
