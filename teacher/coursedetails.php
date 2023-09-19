<?php
require('header.php');
$cid=$_GET['id'];

$co=select("select * from educorner_faculty_course where course_id='$cid';");
$c=mysqli_fetch_assoc($co);


$res=select("select * from educorner_course_materials where course_id='$cid' order by date desc;");
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="text-transform: capitalize;"><?php echo $c['course_title'];?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.phpl">Home</a></li>
          <li class="breadcrumb-item active" style="text-transform: capitalize;">Manage Course</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Course Materials</h5>
             

              
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Date</th>
                    <th scope="col">Download Link</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $n=1;
                  while($row=mysqli_fetch_assoc($res))
                  {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['topic'];?></td>  
                    <td><?php echo $row['date'];?></td>
                    
                    <td><a class="btn btn-sm btn-primary" href="<?php echo $row['url'];?>" target="_blank"><i class="bi bi-link"></i> Open</a></td>
                  
                  
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
              <h5 class="card-title text-center">Add E-Resources</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="php/resourseaction.php"> 

                <input type="hidden" name="courseid" value="<?php echo $cid;?>">
                <input type="hidden" name="date1" value="<?php echo $d;?>">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="floatingName" placeholder="Title" required>
                    <label for="floatingName">Title</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="url" name="url" class="form-control" id="floatingEmail" placeholder="URL" required>
                    <label for="floatingEmail">Resourse URL</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Topic" name="topic" required>
                    <label for="floatingPassword">Topic</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Description" id="floatingTextarea" name="description" style="height: 60px;" required></textarea>
                    <label for="floatingTextarea">Description</label>
                  </div>
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Upload</button>
                 
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          
        </div>
      </div>
      
    </section>

  </main><!-- End #main -->

  <?php
require('footer.php');
?>