<?php
require('header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin Home</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Course List</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                   
                    <th scope="col">Teacher</th>
                    <th scope="col">Email</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Fees</th>
                    
                  </tr>
                </thead>
                <tbody>

                <?php
                $res=select("select * from educorner_faculty_course c,educorner_registration f where c.email=f.email order by startdate desc");
                
          
                $n=0;
                while($row=mysqli_fetch_assoc($res))
                {
                  $n++;
                ?>
                  <tr>
                    <th scope="row"><?php echo $n?> </th>

                     <td style="text-transform: capitalize;"><?php echo $row['course_title'];?></td>
                     <td style="text-transform: capitalize;"> <?php echo $row['fName']." ".$row['lName'];?></td>
                    
                     <td><?php echo $row['email'];?></td>
                     <td><?php echo $row['course_duration'];?> Month</td>
                     <td><?php echo $row['startdate'];?></td>
                     <td><?php echo $row['course_fees'];?></td>
                    <!-- <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td> -->
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