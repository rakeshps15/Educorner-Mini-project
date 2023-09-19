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
              <h5 class="card-title">TEACHERS</h5>
             
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                   
                    <th scope="col">Gender</th>
                    <th scope="col">State</th>
                    <th scope="col">District</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
    
                  
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['id']))
                {
                  $email=$_GET['id'];
                  $sql="update educorner_login set status=-1 where username='$email'";
                  if(mysqli_query($conn,$sql))
        {
        
         ?>
            <script>
                Swal.fire({
                    text: 'Updated',
                    didClose: () => {
                        window.location.replace('../Admin/../pendingrequest.php');
                    }
                });
            </script>
        
        
        
        
                         
                     <?php
        }
        else
        {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    text: 'Error Occurred',
                    didClose: () => {
                        window.location.replace('../profile.php');
                    }
                });
            </script>
            <?php
        }
                }
                $res=select("select *from educorner_registration WHERE email in(SELECT username from educorner_login WHERE status=-1 and user_type=2)");

                // echo "select *from educorner_registration WHERE email in(SELECT email from educorner_login WHERE status=2 and user_type=1)";
          
                $n=0; 
                while($row=mysqli_fetch_assoc($res))
                {
                  $n++;
                  $id=$row['email'];
                ?>
                  <tr>
                    <th scope="row"><?php echo $n?> </th>
                     <td><?php echo $row['fName']." ".$row['lName'];?></td>
                    
                     <td><?php echo $row['gender'];?></td>
                     <td><?php echo $row['state'];?></td>
                     <td><?php echo $row['district'];?></td>
                     <td><?php echo $row['city'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <!-- <td class="btn-group"><a class="btn btn-success btn-sm " href="php/approveteacher.php?id=<?php echo $id;?>">Approve</a><a class="btn btn-danger btn-sm">Reject</a></td>
                  </tr>    -->
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

              