<?php
require('header.php');

$cid=$_GET['id'];


$co=select("select * from educorner_test where course_id='$cid';");

?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Managing Test</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Manage Test</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-12 ">

         
    <section class="section dashboard">

      <div class="row">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Course Materials</h5>
             

              
              <table class="table datatable">
                <thead>
                  <tr>
                    
                    <th scope="col">Qno</th>
                    <th scope="col">Question</th>
                    <th scope="col">Mark</th>
                    
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $n=1;
                  while($row=mysqli_fetch_assoc($co))
                  {
                  ?>
                  <tr>
                    
                    <td><?php echo $row['qno'];?></td>
                    <td><?php echo $row['question'];?></td>
                    <td><?php echo $row['marks'];?></td>  
                        
                  
                  
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
        <div class="col-lg-5">

            <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Add Question</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="php/questionaction.php"> 

                <input type="hidden" name="courseid" value="<?php echo $cid;?>">

                  <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="qno" class="form-control" id="floatingName" placeholder="Question Number" required>
                    <label for="floatingName">Question Number</label>
                  </div>
                </div>
                
               
               
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Question" id="floatingTextarea" name="question" style="height: 100px;" required></textarea>
                    <label for="floatingTextarea">Question</label>
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="marks" class="form-control" id="floatingName" placeholder="Maximum Marks" required>
                    <label for="floatingName">Maximum Marks</label>
                  </div>
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Submit</button>
                 
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          
        </div>
      </div>
      
    </section>

    </div>


    </div>

    <?php
require('footer.php');
?>