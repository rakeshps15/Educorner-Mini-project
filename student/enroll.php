<?php
require('header.php');

$cid=$_GET['eml'];
$sql="SELECT * FROM `educorner_faculty_course` where course_id=$cid";

$a=mysqli_query($conn,$sql);


?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Enrolling Details</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
        <li class="breadcrumb-item active">Edu Corner</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
 
  <section class="section">
    <?php

    $row1=mysqli_fetch_assoc($a);

   


        



    ?>
    <div class="row"  >

      <div class="col-md-7">

        <div class="card">
          <div class="card-body">

            <h1 class="card-title" align="center"><b>Delivery Details</b></h1>
            <!-- Custom Styled Validation -->
            <form class="row g-3 needs-validation" novalidate action="php/enrollaction.php" method="post" name="buybook">

              <input type="hidden" id="validationCustom02" name="cid" value="<?php echo $cid;?>" required>
              <input type="hidden" id="validationCustom02" name="fees" value="<?php echo $row1['course_fees'];?>" required>
              

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom02" style="text-transform: capitalize;" name="name" value="<?php echo $user['fName']." ".$user['lName'];?>" required>
                <div class="valid-feedback">

                </div>
              </div>

             

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationCustom02"  name="email" value="<?php echo $user['email'];?>" disabled required>
                <div class="valid-feedback">

                </div>
              </div>

             

              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Payment Mode</label>
                <select class="form-select" name="paymentmode">
                  <option disabled selected>Select Payment Mode</option>
                  <option value="online" >Online Mode</option>
                  <option value="offline" <?php if($row1['course_mode']=='online') echo 'disabled';?>>Offline Mode</option>
                </select>
              </div>

              <div class="col-12"><center>
                <button type="submit" class="btn btn-primary btn-md col-md-3">Enroll</a></center>
              </div>
            
          </div>

        </div>
      </div>

      <div class="col-md-5">


        <div class="card">
          <h1 class="card-title" align="center"><b>Course Details</b></h1>
          <center>
            <img src="assets/img/logo.png"<?php echo $row1['img'];?>" class="card-img-top" style="width: 200px; height: 220px;">
            <div class="card-body">
              <h5 class="card-title" style="margin-bottom: 0px; padding-bottom:10px;text-transform: capitalize;"><?php echo $row1['course_title'];?></h5>
              
              <p class="card-title" style="margin-bottom: 0px; padding-top: 10px ; padding-bottom: 10px">₹<?php echo $row1['course_fees'];?></p>

             
              </div>
              </form>
             
            </div>
          </center>

        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


<?php
require('footer.php');
?>

<script type="text/javascript">
  window.onload=tprice();
  function tprice() {
    var tp=document.buybook.price.value*document.buybook.quantity.value;
    document.getElementById('tp').innerHTML=document.buybook.price.value+'x'+document.buybook.quantity.value+'= ₹'+tp;
  }
</script>