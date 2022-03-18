<?php
	include('user_header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
	$(document).ready(function() {
    $('#request').DataTable();
} );
</script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?><small style="color:red"> Kindly filled the below survey question to check you donation eligence</small></span></h2> <br />
    
     
       <div class="modal-body">
        <form action="add_donor.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <p>Enter your fullname</p>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full name"></input>
        </div>
        <div class="form-group">
            <p>Enter your Blood Group</p>
            <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Blood Group"></input>
        </div>
        <div class="form-group">
            <p>Date of Birth</p>
            <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Enter dob"></input>
          </div>
        <div class="form-group">
        <p>Enter your weight in pound</p>
            <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter weight"></input>
        </div>
        <div class="form-group">
              <p>Do you have any mild illness such as cold or flu?</p>
              <select class="form-control" name="mild" id="mild" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Do you have any unmedicated diabetes, anemia, or hypertension?</p>
              <select class="form-control" name="unmedicated" id="unmedicated" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Are you using needles to take drugs, steroids, or other substances that not prescribed by Doctors?</p>
              <select class="form-control" name="needles" id="needbles" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Do you engaged in sex for money or drugs?</p>
              <select class="form-control" name="sexengage" id="sexengage" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Test positive for certain conditions, such as HIV or Creutzfeldt-Jakob disease(CJD)?</p>
              <select class="form-control" name="hiv" id="hiv" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Are you taking any certain medications?</p>
              <select class="form-control" name="medication" id="medication" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          <div class="form-group">
              <p>Do you have any sexual contact with same sex in the past 3 months?</p>
              <select class="form-control" name="samesex" id="samesex" >
              <option value="yes">YES</option>
              <option value="no">NO</option>
              </select>
          </div>
          
            <div class="form-group">
            <select class="form-control" name="gender" id="gender" >
              <option value="male">Male</option>
              <option value="female">Female</option>
               <option value="other">Other</option>
            </select>
          </div>
          
    

   
          <div class="form-group">
            <p>Enter your email address</p>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></input>
          </div>
          <div class="form-group">
          <p>Enter your state of origin</p>
            <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state"></input>
          </div>

          <div class="form-group">
          <p>Enter your area zipcode</p>
            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Enter zipcode"></input>
          </div>
          <div class="form-group">
          <p>Enter your phone number</p>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"></input>
          </div>
          <div class="form-group">
          <p>Enter your contact address</p>
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
          </div>
          
          <div class="form-group">
          <p>Upload your Passport</p>
            <input type="file" class="form-control" name="photo" id="photo" ></input>
          </div>
          <div class="form-group">
          <p>Upload your medical report</p>
            <input type="file" class="form-control" name="photo1" id="photo" ></input>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="addmember">Add</button>
        </div>
        </form>
      </div>
      

<?php
	include('user_footer.php');
?>
