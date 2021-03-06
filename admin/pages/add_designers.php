<!DOCTYPE html>
<html lang="en">
<?php include_once 'bridge.php';

		if(!is_logged_in()){
			die(header('location: login.php'));
		}
?>
<head>
<?php include 'header.php'; ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'nav.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Designers</h1>
                </div>
                <!-- /.col-lg-12 -->
      <div class="col-md-5 col-md-offset-0">
         <form role="form">
          <div class="form-group">
          <label>Name*</label>
          <input class="form-control" type="text" name="name" value="vineet" placeholder="enter your name" required>
          </div>
       <div class="form-group">
         <label>Status</label>
         <select class="form-control" name="status" required>
          <option>new</option>
          <option>verified</option>
          <option>unverified</option>
        </select>
       </div>
      <div class="form-group">
       <label>Profession</label>
       <input class="form-control" type="text" name="profession" placeholder="enter your profession" required>
      </div>
      <div class="form-group">
       <label>Contact</label>
       <input class="form-control" type="text" name="contact" placeholder="enter your contact number" required>
      </div>
      <div class="form-group">
       <label>website</label>
       <input class="form-control" type="text" name="website" placeholder="enter your website url" required>
      </div>
      <div class="form-group">
       <label>Qualification</label>
       <input class="form-control" type="text" name="qualification" placeholder="enter your qualification" required>
      </div>
      <div class="form-group">
       <label>Acreditions</label>
       <input class="form-control" type="text" name="acreditions" placeholder="enter your acreditions" required>
      </div>
      <div class="form-group">
       <label>Practice</label>
       <input class="form-control" type="text" name="practice" placeholder="enter your practice" required>
      </div>
     </div>
     <div class="col-md-6 col-md-offset-0">
       <div class="form-group">
        <label>Location</label>
        <textarea class="form-control" rows="3" name="location" required></textarea>
       </div>
       <div class="form-group" style="padding-top:0px;"><label> space for profile image</label></div><br/>
       <div class="form-group" style="padding-top:80px"><label> space for cover image</label></div><br/>
       <div class="form-group" style="padding-top:90px">
        <label>Experience</label>
        <input class="form-control" type="number" name="experience" placeholder="enter your experience" required>
       </div>
       <div class="form-group">
        <label>About</label>
        <textarea class="form-control" rows="3" name="about" required></textarea>
       </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary">ADD</button>
      </div>
     </div>
   </form>
 </div>


            </div>
            <!-- /.row -->

 </div>
  <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
