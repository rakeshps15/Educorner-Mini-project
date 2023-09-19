<?php
require('header.php');
$sql="select * from educorner_learner_course c, educorner_faculty_course f,educorner_payment p where f.course_id=c.course_id and c.course_enrollid=p.course_enrollid and f.startdate<='$d' and f.status=0 and c.email='$email'";
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
        <li class="breadcrumb-item active">My Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Active Courses</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Action</th>
                    <th scope="col">Payment Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $n=1;
                while($row=mysqli_fetch_assoc($a))
                {

                   $id=$row['course_id'];
                  
                ?>


                  <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td style="text-transform: capitalize;"><?php echo $row['course_title'];?></td>
                    <td><?php echo $row['course_duration'];?> Month</td>
                    <td style="text-transform: capitalize;"><?php echo $row['course_mode'];?></td>
                    <td><?php echo $row['startdate'];?></td>

                    <td><a href="coursedetails.php?id=<?php echo $id;?>" class="btn btn-primary btn-sm">View Details</a></td>
               
                    <td><?php if ($row['pstatus']==1) echo "<a href='#' class='btn btn-success btn-sm'>Completed</a>"; else echo "<a href='#' class='btn btn-warning btn-sm'>Pending</a>";?></td>
                  </tr>

                  <?php 

                }
                  ?>
                

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>


 

</main><!-- End #main -->
<?php
require('footer.php');
?>