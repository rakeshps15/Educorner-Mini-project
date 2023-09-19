<?php
require('header.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Course Formation</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- <section class="section dashboard">-->

    <section class="section">
        <div class="row">
            <div class="col-lg-10 ">

                <div class="card">
                    <div class="card-body">
                          <h5 class="card-title">Course Entries</h5> 

                        <!-- General Form Elements -->
                        <form action="php/courseaction.php" method="POST">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Course Tittle</label>
                                <div class="col-sm-8">
                                    <input type="text" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label"> Description</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="height: 100px" name="description"></textarea>
                  </div>
                </div>
                 <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Course Duration</label>
                                <div class="col-sm-8">
                                    <input type="text" name="duration" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Course Fees</label>
                                <div class="col-sm-8">
                                    <input type="text" name="fees" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Course Mode</label>
                                <div class="col-sm-8">
                                    <input type="text" name="mode" class="form-control">
                                </div>
                            </div> -->

                         
                            <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Course Syllabus</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="height: 100px" name="syllabus"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Course Mode</label>
                                <div class="col-sm-8">
                                    <input type="text" name="mode" class="form-control">
                                </div>
                            </div>
                   <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Start Date</label>
                                <div class="col-sm-8">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                         
                            
                            <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-4 col-form-label">File Upload</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div> 
                  
              
                  

                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label"></label>
                  <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary"><a href="mangecourse.php"></a>Submit Form</button>
                  </div>
                </div>

              <!-- </form><-- End General Form Elements -->

                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-7 "> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Course List</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Course Description</th>
                                    <th scope="col">Course Durartion</th>
                                    <th scope="col">Course Fees</th>
                                    <th scope="col">Course Syllabus</th>
                                    <th scope="col">Course Mode</th>
                                    
                                    

                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $subres=select("select * from educorner_faculty_course;");
                                $n=0;
                                while($row=mysqli_fetch_assoc($subres))
                                {
                                    $n++;

                                ?>


                               <tr>
                                    <th scope="row"><?php echo $n?></th>
                                    <td><?php echo $row["course_title"]?></td>
                                    <td><?php echo $row["course_description"]?></td>
                                    <td><?php echo $row["course_duration"]?></td>
                                    <td><?php echo $row["course_fees"]?></td>

                                    <td><?php echo $row["course_syllabus"]?></td>
                                    <td><?php echo $row["course_mode"]?></td>


                                
                                 
                                </tr>

                                <?php 

                                }
                                ?>
                               
                            </tbody>



                            
                        </table>


                    </div>
                </div>

            </div>


        </div> -->
    </section>

    </section> 

</main><!-- End #main -->

<?php
require('footer.php');
?>