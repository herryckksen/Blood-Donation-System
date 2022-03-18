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
                <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?></span></h2> <br />
                <h3>Please fill the form below for help</h3><br />
                <br />


                <form action="addhelp.php" method="post" class="form-horizontal form-label-left" novalidate>


<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject">Full Name<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="help_name" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="help_name" placeholder="" required="required" type="text">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject">Phone Number<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="help_phone" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="help_phone" placeholder="" required="required" type="text">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject">Email Address<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="help_email" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="help_email" placeholder="" required="required" type="text">
    </div>
</div>
                            <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDesc">Message<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" id="help_mesage" name="help_mesage" required="required" placeholder="Message" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>


<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button type="reset" class="btn btn-primary">Reset</button>
        <button name="btn-notice" id="btn-notice" type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
</form>





  
      
    </div>
  </div>
</div>
<?php
	include('user_footer.php');
?>