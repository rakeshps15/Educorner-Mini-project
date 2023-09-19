<?php
require('header.php');
?>

<style type="text/css">
  input,select,textarea
  {
    border: 1px solid #000 !important;
  }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Complaint</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Mentor</a></li>
          <li class="breadcrumb-item active">Create Complaint</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">

              <h1 class="card-title" align="center"><b>New Complaint</b></h1>
              <form class="row g-3 needs-validation" novalidate action="php/complaintaction.php" method="post" name="complaint" enctype="multipart/form-data">

                <input type="hidden" id="validationCustom02" name="email" value="<?php echo $email;?>" required>

                <div class="col-md-12">
                  <div class="col-md-12">
                  <label for="validationCustom02" class="form-label">Title</label>
                  <input type="text" class="form-control" id="validationCustom02" name="title" required>
                  <div class="valid-feedback">
                    
                  </div>
                </div>
                </div>

                <!-- <div class="col-md-2"></div> -->
                

                <div class="col-md-12">
                  <div class="col-md-12">
                  <label for="validationCustom02" class="form-label">Discription</label>
                  <textarea class="form-control" id="validationCustom02" name="complaint" required></textarea>
                  <div class="valid-feedback">
                    
                  </div>
                </div>
                </div>

                <div class="col-md-3">
                <label for="validationCustom02" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Priority :</b></label>
              </div>
                <div class="col-md-3">
                <label for="validationCustom02" class="form-label">High</label>
                 <input class="form-check-input" type="radio" name="priority" id="high" value="High" >
                <div class="valid-feedback">

                </div>
              </div>

              <div class="col-md-3">
                <label for="validationCustom02" class="form-label">Medium</label>
                 <input class="form-check-input" type="radio" name="priority" id="medium" value="Medium" >
                <div class="valid-feedback">

                </div>
              </div>  

              <div class="col-md-3">
                <label for="validationCustom02" class="form-label">Low</label>
                 <input class="form-check-input" type="radio" name="priority" id="low" value="Low" checked="">
                <div class="valid-feedback">

                </div>
              </div>

                <div class="col-12"><center>
                  <button class="btn btn-primary" type="submit">Send <i class="bi bi-arrow-right-circle"></i></button></center>
                </div>
              </form>



              </div>
          </div>
        </div>
      </div>
    </section>

  </main>


<?php
require('footer.php');
?>