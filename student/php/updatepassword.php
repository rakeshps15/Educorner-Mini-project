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
    $password = $_POST["currentPassword"];
    $newpassword = $_POST["newPassword"];
    $ConfirmPassword = $_POST["ConfirmPassword"];

    echo "currentPassword=" . $password;
    echo "<br>";
    echo "newPassword=" . $newpassword;
    echo "<br>";
    echo "ConfirmPassword=" . $ConfirmPassword;

    $sql = "select * from educorner_login WHERE username='$email'";
    $res = select($sql);
    $row = mysqli_fetch_assoc($res);

    if ($row['password'] == $password) {
        $sql = "update educorner_login SET  password='$newpassword' WHERE username='$email'";


        if (mysqli_query($conn, $sql)) {

    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Password Updated',
                    didClose: () => {
                        window.location.replace('../../log/loginh.html');
                    }
                });
            </script>





        <?php
        }
    } else {
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




    ?>
</body>

</html>