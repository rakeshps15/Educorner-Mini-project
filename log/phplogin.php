<?php
session_start();
require("../mentor/connection.php");
if (isset($_POST['login'])) {

    $username = $_POST["t1"];
    $password = $_POST["t2"];
    // echo "username=".$usersname;
    // echo "<br>";
    // echo "password=".$password;
    $sql = "select * from educorner_login where username='$username';";
    $res = getrows($sql);
    if ($res > 0) {

        $res = select($sql);
        
        if ($res) {
            $rows=mysqli_fetch_assoc($res);
            if ($password == $rows['password']) {
                $status = $rows['status'];
                if ($status == 1) {
                    $status = $rows['user_type'];
                    if ($status == 1) {
                        $_SESSION['email']=$rows['username'];
                        ?>
                        <script>
                            alert("Welcome Back");
                            window.location.replace("../student/");
                        </script>
                        <?php
                    } else if ($status == 2) {
                        $_SESSION['email']=$rows['username'];

                        // echo $email;
                        ?>
                        <script>
                            alert("Welcome Back");
                           window.location.replace("../teacher/");
                        </script>
                        <?php
                       }else if ($status == 0){
                            $_SESSION['email']=$rows['username'];
                        ?>
                        <script>
                            alert("Welcome Back");
                            window.location.replace("../admin/");
                        </script>
                        <?php
                    } else {
                        echo "invalid usertype";
                    }
                } else {
                    echo "user is not valid";
                }
            } else {
                echo "incorrect";
            }
        } else {
            echo "error occured";
        }
    } else {
        echo "Account does't exsist";
    }
}
