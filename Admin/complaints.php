<?php
require('header.php');
$sql="select * from educorner_complaint c,educorner_registration r where c.email=r.email and c.status=0";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);
$sql1="select * from educorner_complaint c,educorner_registration r where c.email=r.email and c.status=1";
$a1=mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($a1);
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>User Complaints</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Educorner </a></li>
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
                  
                    <th scope="col">Action</th>
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
                    <td><?php echo $row['fName'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php 
                    if($row['priority']=='High') echo "<a class='btn btn-sm rounded-pill btn-danger'>&nbsp;&nbsp;&nbsp;High&nbsp;&nbsp;&nbsp;</a>";
                    else if($row['priority']=='Medium') echo "<a class='btn btn-sm rounded-pill btn btn-warning'>Medium</a>";
                    else if($row['priority']=='Low') echo "<a class='btn btn-sm rounded-pill btn-success'>&nbsp;&nbsp;&nbsp;&nbsp;Low&nbsp;&nbsp;&nbsp;</a>";?>

                  </td>
                    <td><?php echo $row['complaint'];?></td>
                    <td><?php echo $row['date'];?></td>
                    
                    <td>
                      <?php if ($row['reply']==NULL) {
                        ?>
                        <a class="btn btn-success" href="javascript:;" data-bs-toggle="modal" data-bs-target="#verticalycentered" onclick="document.reply.complaintid.value=<?php echo $row['com_id'];?>"><i class="bi bi-plus-circle"></i> Reply</a>
                        <?php 
                      }
                      else
                      { 
                        
                        echo $row['reply'];
                      } ?></td>
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
<div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="card-title">ADD REPLY</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <form class="row g-3 needs-validation" novalidate action="" method="post" name="reply">
              
                
                <input type="hidden" class="form-control" id="id" name="complaintid" required>
               

              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Reply</label>
                <textarea class="form-control" id="validationCustom02" name="reply" required>  </textarea> 
                <div class="valid-feedback">

                </div>
              </div>

              <div class="col-12"><center>
                <button type="submit" class="btn btn-primary btn-md col-md-3" name="submit1">Save</a></center>
              </div>
                    </form>
                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Replied Complaints</h5>

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

if(isset($_POST['submit1'])){
  $complaintid=$_POST['complaintid'];
  $reply=$_POST['reply'];
  $up="update educorner_complaint SET reply='$reply',status='1' WHERE com_id='$complaintid'";
  echo $up;
  if($a=mysqli_query($conn,$up))
{
   ?>
     <script>
          alert("Reply Sended");
          window.location.href="";
     </script>

     <?php
}  
}
?>

<?php
require('footer.php');
?>