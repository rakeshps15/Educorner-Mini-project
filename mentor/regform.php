
<?php
require('connection.php');
if ($_POST['type'] == 'User')
    $type = 1;
else
    $type = 2;
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$HName = $_POST["hname"];
$Gender = $_POST["gender"];
$state = $_POST["state"];
$district = $_POST["district"];
$city =$_POST["city"];
$email = $_POST["email"];
$PhoneNumber = $_POST["phone1"];
$alternativePhoneNumber = $_POST["phone2"];
$password = $_POST["passw1"];
$confirmpassword = $_POST["passw2"];
$securityQuestion = $_POST["question"];
$securityResponse = $_POST["Response"];

$numrow = getrows("select * from educorner_login where username='$email';");

if ($numrow == 0) 
{
    $sql1 = "insert into educorner_login (user_type, username, password, securityq, securea) values($type,'$email','$password','$securityQuestion','$securityResponse')";
    echo "$sql1";
    if (insert($sql1)) {
        $sql2 = "insert into educorner_registration(fname,lname,house_name,gender,phone_number,email,state,district,city) values('$firstname','$lastname','$HName','$Gender','$PhoneNumber','$email','$state','$district','$city')";
        echo "$sql2";
        if (insert($sql2)) {
        ?>
            <script>
                alert("success");
                window.location.replace('../log/loginh.html');
            </script>

        <?php
        }
    }
} 
else 
{
    ?>
    <script>
        alert("Email already Registered... Try another email!!");
        window.location.replace('../mentor/');
    </script>

<?php

}



// 
?>
regform.php
Displaying regform.php.