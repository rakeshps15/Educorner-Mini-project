<?php
require('header.php');
$sql = "select * from educorner_learner_course c, educorner_faculty_course f,educorner_payment p where f.course_id=c.course_id and c.course_enrollid=p.course_enrollid and f.startdate<'$d' and f.status=1 and c.email='$email'";
// echo $sql;
$a = mysqli_query($conn, $sql);

?>

<style type="text/css">
  input,
  select {
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
            <h5 class="card-title">Completed Courses</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Course</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Mode</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">Test Details</th>
                  <th scope="col">Review</th>
                  <th scope="col">Feedback</th>



                </tr>
              </thead>
              <tbody>
                <?php
                $n = 1;
                while ($row = mysqli_fetch_assoc($a)) {

                ?>


                  <tr>
                    <th scope="row"><?php echo $n++; ?></th>
                    <td style="text-transform: capitalize;"><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['course_duration']; ?> Month</td>
                    <td style="text-transform: capitalize;"><?php echo $row['course_mode']; ?></td>
                    <td><?php echo $row['startdate']; ?></td>


                    <td><a href="php/starttest.php?id=<?php echo $row['course_id'];?>" class='btn btn-success btn-sm'>Attend Test</a></td>
                    <td><button class='btn btn-success btn-sm' data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="document.getElementById('id').value='<?php echo $row['email']?>'">myreview</button></td>
                    <td><button class='btn btn-success btn-sm' data-bs-toggle="modal" data-bs-target="#exampleModal2" onclick="document.getElementById('id2').value='<?php echo $row['course_id']?>'">myfeedback</button></td>
                  </tr>

                <?php

                }
                ?>

              </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <form action="php/reviewaction.php" method="POST">
                    <div class="modal-body">

                      <input type="text" name="id" id="id">

                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Review</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" style="height: 100px" name="revieew" required></textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Rating</label>
                        <div class="col-sm-8">
                          <select class="form-select" name="rate" aria-label="Default select example" required>
                            <option value="" selected disabled>Rating</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">five</option>
                          </select>
                        </div>
                      </div>






                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="php/feedbackaction.php" method="POST">
                    <div class="modal-body">

                      <center><input type="text" name="id2" id="id2"></center>

                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Feedback</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" style="height: 100px" name="feedback" required></textarea>
                        </div>
                      </div>

                      <!-- <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Rating</label>
                        <div class="col-sm-8">
                          <select class="form-select" name="rate" aria-label="Default select example" required>
                            <option value="" selected disabled>Rating</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">five</option>
                          </select>
                        </div>
                      </div> -->

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
              </div>
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