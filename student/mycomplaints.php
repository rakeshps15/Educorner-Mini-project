<?php
require('header.php');
$sql="select * from educorner_complaint c,educorner_registration r where c.email=r.email and c.email='$email' and c.status=0";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);
$sql1="select * from educorner_complaint c,educorner_registration r where c.email=r.email and c.email='$email' and c.status=1";
$a1=mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($a1);
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>My Complaints</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Educorner </a></li>
        <li class="breadcrumb-item active">Complaints</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pending Complaints</h5>

            <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                  
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $n=1;
                  // echo $sql1;
                while($row=mysqli_fetch_assoc($a))
                {
                  $complaintid=$row['com_id'];
                  ?>
                   <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td style="text-transform: capitalize;"><?php echo $row['fName'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php 
                    if($row['priority']=='High') echo "<a class='btn btn-sm rounded-pill btn-danger'>&nbsp;&nbsp;&nbsp;High&nbsp;&nbsp;&nbsp;</a>";
                    else if($row['priority']=='Medium') echo "<a class='btn btn-sm rounded-pill btn btn-warning'>Medium</a>";
                    else if($row['priority']=='Low') echo "<a class='btn btn-sm rounded-pill btn-success'>&nbsp;&nbsp;&nbsp;&nbsp;Low&nbsp;&nbsp;&nbsp;</a>";?>

                  </td>
                    <td><?php echo $row['complaint'];?></td>
                    <td><?php echo $row['date'];?></td>
                    
                   
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





              <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Resolved Complaints</h5>

            <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                   
                    <th scope="col">Reply</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $n=1;
                while($row1=mysqli_fetch_assoc($a1))
                {
                  $complaintid=$row1['com_id'];
                  ?>
                   <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo $row1['fName'];?></td>
                    <td><?php echo $row1['title'];?></td>
                    <td><?php 
                    if($row1['priority']=='High') echo "<a class='btn btn-sm rounded-pill btn-danger'>&nbsp;&nbsp;&nbsp;High&nbsp;&nbsp;&nbsp;</a>";
                    else if($row1['priority']=='Medium') echo "<a class='btn btn-sm rounded-pill btn btn-warning'>Medium</a>";
                    else if($row1['priority']=='Low') echo "<a class='btn btn-sm rounded-pill btn-success'>&nbsp;&nbsp;&nbsp;&nbsp;Low&nbsp;&nbsp;&nbsp;</a>";?>

                  </td>
                    <td><?php echo $row1['complaint'];?></td>
                    <td><?php echo $row1['date'];?></td>
                    
                    <td><?php echo $row1['reply'];?></td>
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
</main>



<?php
require('footer.php');
?>