<?php
require('header.php');
$sql="select * from educorner_feedback c,educorner_registration r where c.learner_email=r.email";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);
// $sql1="select * from educorner_rerview c,educorner_registration r where c.learner_email=r.email";
// $a1=mysqli_query($conn,$sql1);
// $num1=mysqli_num_rows($a1);
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>User Feedback</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Educorner </a></li>
      <li class="breadcrumb-item active">Review</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Feedback</h5>

          <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">feedbackDate</th>
                  <th scope="col">feedback</th>
                
                </tr>
              </thead>
              <tbody>
                <?php
                $n=1;
                // echo $sql1;
              while($row=mysqli_fetch_assoc($a))
              {
                $reviewid=$row['fid'];
                ?>
                 <tr>
                  <th scope="row"><?php echo $n++;?></th>
                  <td><?php echo $row['fName'];?></td>
                  <td><?php echo $row['feedback_date'];?></td>
                  <td><?php echo $row['feedback'];?></td>
        
                 </tr>
                 <?php
                 
                }
                ?>
                </tbody>
              </table>
