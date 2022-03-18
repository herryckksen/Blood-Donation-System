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

  <h2>The life Savers</h2> <br />
   
   <h3>Recent Donor</h3>
   <table class="table table-bordered" id="request">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Blood Group</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
    <?php
      $members= $connection->query("SELECT * FROM donor ");
      while($row = $members->fetch_array()) {
    ?>
        <tr>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['myaddress'];?></td>
        <td><?php echo $row['bloodgroup'];?></td>
        <td><button type="button" data-toggle="modal" data-target="#updaterequester<?php echo $row['donor_id']?>" class="btn btn-success">Approved</button>
        </td>
         
         </tr>
         
<?php }
      ?>
    </tbody> 
  </table>
   

<?php
	include('user_footer.php');
?>
