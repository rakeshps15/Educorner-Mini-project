<?php
require('header.php'); 
  

?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>User Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">HOME</a></li>
        <li class="breadcrumb-item active"><?php echo $user['fName'];?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <!-- <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div> -->

        <div class="col-xl-8 offset-2">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="../uploads/user/profile/<?php echo $user['email'];?>" alt="Profile" class="rounded-circle">
                    <h2><?php echo $user['fName'];?></h2>
                    <h3>User</h3>
                    
    
                  </div>
                </div>
                

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['fName']." ".$user['lName'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['house_name'];?></div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['fName'];?></div>
                  </div> -->

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">State</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['state'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">District</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['district'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['city'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['phone_number'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['email'];?></div>
                  </div>

                </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">





                <!-- Profile Edit Form -->

                <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="../uploads/user/profile/<?php echo $user['email'];?>" alt="Profile">
                      <div class="pt-2">
                        
                      </div>
                    </div>
                  </div>

                  <form action="php/editprofileaction.php" method="POST" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="Profile Picture" class="col-md-4 col-lg-3 col-form-label">Update Profile</label>
                    <div class="col-md-7">
                      <input name="profile_pic" type="file" class="form-control" id="profile_pic" required="">
                    </div>
                    <div class="col-md-1">
                      <button type="submit" class="btn btn-primary btn-sm pt-2" name="editpic">Upload</button>
                    </div>
                  </div>
                  <div class="text-center">
                  
                </div>
                </form>

                <form action="php/editprofileaction.php" method="post" name="editprofile">
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="fullName" value="<?php echo $user['fName'];?>" disabled>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="email" value="<?php echo $user['email'];?>" disabled>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $user['phone'];?>" disabled>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-md-4 col-lg-3 col-form-label" id="gender">Gender</label> 
                    <div class="col-md-8 col-lg-9"> 
                     <select name="gender" class="form-control">
                       <option value="<?php echo $user['gender'];?>" selected=""><?php echo $user['gender'];?></option>
                       <option value="male" name=male>Male</option>
                       <option value="female" name=female>Female</option>
                       <option value="others" name=others>Others</option>
                       <option value="secret" name=secret>Prefer not to say</option>
                     </select>
                   </div>
                 </div>

                <div class="row mb-3">
                  <label for="hname" class="col-md-4 col-lg-3 col-form-label">State</label>
                  <div class="col-md-8 col-lg-9">
                    <input type="text" class="form-control" id="State" name="State" placeholder="" title="Please enter your State" value="<?php echo $user['state'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
                  <div class="col-md-8 col-lg-9">
                    <input type="text" class="form-control" id="city" name="city" placeholder="" title="Please enter your City" value="<?php echo $user['city'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="District" class="col-md-4 col-lg-3 col-form-label">District</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-control" name="district">
                      <option value="null" selected="">Select</option>
                      <?php

                      while($row=mysqli_fetch_assoc($dist))
                      {
                        ?>
                        <option value="<?php echo $row['districtid'];?>"><?php echo $row['district'];?></option>

                        <?php
                      }
                      ?>


                    </select>
                  </div>
                </div>

                <!-- <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="twitter" value="<?php echo $user['twitter'];?>">
                      </div>
                    </div>


                <div class="row mb-3">
                  <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="facebook" type="text" class="form-control" id="Facebook" value="<?php echo $user['facebook'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="instagram" type="text" class="form-control" id="Instagram" value="<?php echo $user['instagram'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="linkedin" type="text" class="form-control" id="Linkedin" value="<?php echo $user['linkedin'];?>">
                  </div>
                </div> -->

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="editprofile">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

           <!--  <div class="tab-pane fade pt-3" id="profile-settings"> -->

              <!-- Settings Form -->
              <!-- <form>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                      <label class="form-check-label" for="changesMade">
                        Changes made to your account
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        Information on new products and services
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form> -->




              <!-- End settings Form -->

            <!-- </div> -->

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="php/pass.php" method="post" name="changepass" onsubmit="return(validate())">

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <span class="txt3 p-b-2 error" id="erpass"></span>
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <span class="txt3 p-b-2 error" id="ercpass"></span>
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?php
require('footer.php');
?>