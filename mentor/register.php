
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact - Mentor Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .form-control,
    .form-select {
        height: 50px;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Edu corner</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <!-- <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li> -->

                    <li class="dropdown"><a href="C:\Antony\extract\bootstrap-5.2.0-beta1-dist\Reg.html"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../mentor/register.php?type=User">User</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->

                            <li><a href="../mentor/register.php?type=Teacher">Teacher</a></li>
                            <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href="contact.html">Contact</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="../log/loginh.html" class="get-started-btn">login</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2><?php echo $_GET['type']; ?> Registration</h2>
                <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <form action="regform.php" method="POST" onsubmit="return(validate())">
                    <div class="row mt-4">
                        <div class="col-md-5 offset-md-1">
                            <div class="row">
                                <div class="col-md-3 pt-3">
                                    <label class="firstname">First Name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="fname" id="fname" placeholder="Enter your First Name" pattern="[A-Za-z0-9 ]{1,}" class="form-control ">
                                </div>
                            </div>

                            <!-- <div class="col-md-3 pt-3">
                                        <label class="pass">Alternative Number :</label>
                                    </div>
                                    <div class="col-md-9 pt-4">
                                        <input type="number" name="phone2" id="PhoneNumber2" placeholder="Enter your Phone number" pattern="[91][0-9]{9}" class="form-control"> -->

                            <!-- </div>
                                </div>
                            </div> -->

                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="lastname">Last Name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" pattern="[A-Za-z]{1,}" class="form-control last">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="pass">House Name </label>
                                </div>
                                <div class="col-md-9">
                                    <!--<input type="text" name="House Name" id="House Name" placeholder="Enter your address" pattern="[A-Za-z0-9 ]{1,10}" class="form-control last">-->
                                    <input type="text" name="hname" id="House Name" placeholder="Enter your address" pattern="[A-Za-z ]{1,}" class="form-control last">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="pass">State </label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select last" name="state">
                                        <option value="kerala">Kerala</option>
                                        <option value="goa">Goa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="pass">District</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select last" name="district">
                                        <option value="Ernakulam">Ernakulam</option>
                                        <option value="Kannur">Kannur</option>
                                        <option value="kottayam">kottayam</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="pass">City </label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select last" name="city" id="state">
                                        <option value="Muvattupuzha">Muvattupuzha</option>
                                        <option value="Piravom">Piravom</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row pt-4">
                                <div class="col-md-3 pt-3">
                                    <label class="mail">E-mail </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,25}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-4 pt-3">
                                    <label class="firstname">Phone number </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="phone1" id="PhoneNumber" placeholder="Enter your first Phone number" pattern="[91][6-9]{9}" class="form-control">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="lastname">Alternate Number </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="phone2" id="PhoneNumber2" placeholder="Enter your second Phone number" pattern="[91][6-9]{9}" class="form-control">

                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="pass">Gender</label>
                                </div>
                                <div class="col-md-8">
                                    <!--<input type="text" name="House Name" id="House Name" placeholder="Enter your address" pattern="[A-Za-z0-9 ]{1,10}" class="form-control last">-->
                                    <div class="row">
                                        <div class="col-md-6" style="display: flex;justify-content: center;">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" style="margin-top: 21px; margin-bottom: 20px"><label style="margin-top: 18px; margin-left: 5px;">Male</label></input>
                                        </div>
                                        <div class="col-md-6" style="display: flex;justify-content: center;">
                                            <input class="form-check-input" style="margin-top: 21px;" type="radio" name="gender" id="gender" value="Female"><label style="margin-top: 18px; margin-left: 5px;">Female</label></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="pass">Password </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="passw1" id="password" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" class="form-control">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="pass">Confirm password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="passw2" id="password2" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" class="form-control">
                                </div>

                            </div>
                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="pass">Security Questionn </label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-select last" name="question">
                                        <option value="What is ur favourite color?">What is ur favourite color?</option>
                                        <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                                        <option value="In what city were you born?">In what city were you born?</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row pt-4">
                                <div class="col-md-4 pt-3">
                                    <label class="mail">Security Response </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="Response" id="Response" placeholder=" " pattern="[A-Za-z0-9 ]{1,}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-6">

                            <div class="row">
                                <div class="col-md-3 pt-3">
                                    <label class="pass">Phone Number :</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" name="phone" id="PhoneNumber" placeholder="Enter your Phone number" pattern="[91][0-9]{9}" class="form-control">

                                </div>
                            </div>
                            <div class="row">

                                <div class="row">
                                    <div class="col-md-3 pt-3">
                                        <label class="pass">Alternative Number :</label>
                                    </div>
                                    <div class="col-md-9 pt-4">
                                        <input type="number" name="phone2" id="PhoneNumber2" placeholder="Enter your Phone number" pattern="[91][0-9]{9}" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="col-md-3 pt-3">
                                        <label class="gender">Gender:</label>

                                    </div>
                                    <div class="row col-md-9 pt-4">

                                        <div class="col-md-3 male">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="boy" style="margin-top: 21px; margin-bottom: 20px"><label style="margin-top: 18px; margin-left: 5px;">Male</label></input>
                                        </div>
                                        <div class="col-md-3 female">
                                            <input class="form-check-input" style="margin-top: 21px;" type="radio" name="gender" id="gender" value="girl"><label style="margin-top: 18px; margin-left: 5px;">Female</label></input>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-3 pt-3">
                                        <label class="pass">Password :</label>
                                    </div>
                                    <div class="col-md-9 pt-4">
                                        <input type="password" name="passw" id="password" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row pt-3">
                                    <div class="col-md-3 pt-3">
                                        <label class="pass">Confirm Password:</label>
                                    </div>
                                    <div class="col-md-9 pt-4">
                                        <input type="password" name="passw2" id="password2" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row pt-3">
                                    <div class="col-md-3 pt-3">
                                        <label class="pass">Security Question :</label>
                                    </div>
                                    <div class="col-md-8 pt-4">
                                        <input type="text" name="question" id="question" placeholder=" " pattern="[A-Za-z]{1,}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row pt-3">
                                    <div class="col-md-3 pt-3">
                                        <label class="pass">Security Response:</label>
                                    </div>
                                    <div class="col-md-8 pt-4">
                                        <input type="text" name="Response" id="Response" placeholder=" " pattern="[A-Za-z0-9 ]{1,}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>">
                        <div class="col-md-12 pt-3 text-center">
                            <input type="Submit" class="btn btn-success">
                        </div>
                </form>
            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">BootstrapMade</a>
                </div>
            </div>
            <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0"> -->
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        function validate() {
            var password = document.getElementById("password").value;
            var password2 = document.getElementById("password2").value;
            var PhoneNumber = document.getElementById("PhoneNumber").value;
            var PhoneNumber2 = document.getElementById("PhoneNumber2").value;
            var count = 0;
            if (password != password2) {
                count++;
                Swal.fire(

                    'Password Not Match!',
                    'Please Enter correct Password!',
                    'error'
                );



            }
            if (PhoneNumber == PhoneNumber2) {
                count++;
                Swal.fire(
                    'Not Correct!',
                    'Please Enter new number!',
                    'error'
                )
            }
            if (count > 0) {
                return false;
            } else {
                return (true);
            }
        }
    </script>
</body>

</html>
register.php
Displaying register.php.