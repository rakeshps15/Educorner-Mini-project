<?php
require('header.php');

$cid=$_GET['id'];
$qn=$_GET['qn'];

$count=$_SESSION['count'];
$sql="select * from educorner_test where course_id='$cid' and qno='$qn';";

$a=select($sql);
$row=mysqli_fetch_assoc($a);

?>

<style type="text/css">
input,select
{
  border: 1px solid #000 !important;
}
</style>

<script type="text/javascript">


</script>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Educorner</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php"> User</a></li>
        <li class="breadcrumb-item active">Test Space</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <?php 

  // echo $sql;

  ?>


   <section class="section">
      <div class="row">
        <div class="col-lg-12"> 

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Test in Progress</h5>

              <div class="row">
                <div class="col-md-10">
                  <p style="font-size: 24px;"><b>Question <?php echo $row['qno'];?>/<?php echo $count;?></b></p>
                </div>
                <div class="col-md-2"><p><b>Max Marks: <?php echo $row['marks'];?></b></p></div>
              </div>
              <div class="row">
                  <p style="font-size: 20px;"><?php echo $row['question'];?></p>
              </div>
               <div class="row">
                  <form action="php/submitanswer.php" method="POST">
                    <input type="hidden" name="qno" value="<?php echo $row['qno'];?>">
                    <input type="hidden" name="cid" value="<?php echo $cid;?>">
                    <textarea rows="10" required type="text" name="answer" class="form-control" maxlength="500"></textarea>
                  
              </div>

              <div class="row pt-2 ">
                <center>
                <button type="submit" class="btn btn-primary col-md-1" >Next</button>
              </center>
              </div>

              
                


              

             

            </div>
          </div>

        </div>
      </div>
    </section>


 

</main><!-- End #main -->
<?php
require('footer.php');
?>