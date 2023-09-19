<?php
require('header.php');
$sql="SELECT * FROM educorner_faculty_course where course_id not in (SELECT course_id FROM `educorner_learner_course` WHERE email='$email')and startdate>='$d'";
// echo $sql;
$a=mysqli_query($conn,$sql);

?>

<style type="text/css">
input,select
{
  border: 1px solid #000 !important;
}
</style>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Educorner</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php"> User</a></li>
        <li class="breadcrumb-item active">Educorner</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section row">
    <?php

    // echo $sql;

    while($row=mysqli_fetch_assoc($a))
    {
    

    $dprice=($row['course_fees']);


     $cid=$row['course_id'];
     
     
     // $rating="SELECT AVG(rating) as avg FROM purchase WHERE rating!=0 and course_id=$pid";
     // $a1=mysqli_query($conn,$rating);

     // $row1=mysqli_fetch_assoc($a1);
     ?>


     <div class="col-md-3">
      <div class="card">
        <img src="http://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2017/06/Python-Programming-Edureka.png" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title" style="margin-bottom: 0px; padding-top: 10px; padding-bottom:10px;text-transform: capitalize;"><?php echo $row['course_title'];?><!-- <p class="btn btn-success btn-sm" style="font-weight: 600; margin-bottom :0px;float: right;"><b> 3.5 <?php //echo round($row1['avg'],1);?><span style="color:yellow;font-size: 15px">&#9733;</span></b></p> --></h5>
          <p class="card-text" style="margin-bottom: 0px;font-size: 80%;">Duration <b><?php echo $row['course_duration'];?> Months</b></p>
          <p class="card-title" style="margin-bottom: 0px; padding-top: 10px ; padding-bottom: 10px">Fees : ₹<?php echo $row['course_fees'];?></p>
          <p class="card-text" style="margin-bottom: 0px;text-transform: capitalize;">Mode : <b><?php echo $row['course_mode'];?></b></p>
          <p class="card-text" style="margin-bottom: 0px; padding-top: 10px ; padding-bottom: 10px;text-align: justify;"><?php echo $row['course_description'];?></p>
          
          <center>
            
          <a class="btn btn-success btn-sm" href="enroll.php?eml=<?php echo $cid;?>"><i class="bi bi-lightning-fill"></i>Enroll Now</a></center>

        </div>
      </div><!-- End Card with an image on top -->

    </div>






    <?php

  }

  ?>

</section>

</main><!-- End #main -->
<?php
require('footer.php');
?>