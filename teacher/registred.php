<?php
require('header.php');

$cid = $_GET['cid'];

$_SESSION['ccc']=$cid;



?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Registered Students</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Registered Students</li>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Payment</th>
                                       




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        
                        
                                    $subres = select("select * from educorner_learner_course c,educorner_registration r,educorner_payment p where r.email=c.email and c.course_id = '$cid' and p.course_enrollid=c.course_enrollid");
                                    $n = 1;
                                    
                                    while ($row = mysqli_fetch_assoc($subres)) {
                                      
                                        $payid=$row['paymentid'];
                                    ?>


                                        <tr>
                                        
                                            <th scope="row"><?php echo $n++;?></th>
                                            <td style="text-transform: capitalize;"><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone_number'] ?></td>
                                            <td style="text-transform: uppercase;"><?php echo $row['paymenttype'] ?></td>
                                            <td><?php if ($row['pstatus']==1) echo "<a href='#' class='btn btn-success btn-sm'>Completed</a>"; else echo "<a href='php/markaspaid.php?id=$payid' class='btn btn-warning btn-sm'>Mark as Received</a>";?></td>


                                          

                                          
                                           
                                            




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