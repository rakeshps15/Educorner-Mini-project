<?php
require('header.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Upcoming Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Managing course</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-12 ">

        <section class="section">
            <div class="row">
                 <div class="col-lg-12"> 

                    <div class="card">
                        <div class="card-body">
                           

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course Name</th>
                                        
                                        <th scope="col">Course Durartion</th>
                                        <th scope="col">Course Fees</th>
                                        <th scope="col">Course Syllabus</th>
                                        <th scope="col">Course Mode</th>
                                        <th scope="col">Course Date</th>
                                        <th scope="col">Registrations</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        
                        
                                    $subres = select("select * from educorner_faculty_course where startdate>'$d'");
                                    $n = 1;
                                    
                                    while ($row = mysqli_fetch_assoc($subres)) {
                                        
                                        $cid=$row['course_id'];

                                    ?>


                                        <tr>
                                        
                                            <th scope="row"><?php echo $n++?></th>
                                            <td><?php echo $row["course_title"] ?></td>
                                            
                                            <td><?php echo $row["course_duration"] ?> Months</td>
                                            <td><?php echo $row["course_fees"] ?></td>

                                            <td><?php echo $row["course_syllabus"] ?></td>
                                            <td><?php echo $row["course_mode"] ?></td>
                                            <td><?php echo $row["startdate"] ?></td>
                                            <td><a href="registred.php?cid=<?php echo $cid;?>" class="btn btn-primary btn-sm">View Registations</a></td>
                                           
                                            




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



    </div>


    </div>

    <?php
require('footer.php');
?>