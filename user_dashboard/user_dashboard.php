<?php
	include('user_header.php');
?>

		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Overview of Available Blood</h3>
							
						</div>
						<div class="panel-body">
							<div class="row">
								
						
   <table class="table table-bordered" id="overview">
    <thead>
      <tr>
        <th>Blood Group O+</th>
        <th>Blood Group O-</th>
        <th>Blood Group A+</th>
		<th>Blood Group A-</th>
        <th>Blood Group AB+</th>
        <th>Blood Group AB-</th>
		<th>Blood Group B+</th>
		<th>Blood Group B-</th>
      
        
      </tr>
    </thead>
    <tbody>
    
    <?php
      $members= $connection->query("SELECT * FROM donor ");
      while($row = $members->fetch_array()) {
    ?>
        <tr>
        <td>10 <small style="color:red">Pints</small></td>
        <td>20 <small style="color:red">Pints</small></td>
        <td>16 <small style="color:red">Pints</small></td>
        <td>18 <small style="color:red">Pints</small></td>
        <td>21 <small style="color:red">Pints</small></td>
		<td>51 <small style="color:red">Pints</small></td>
		<td>21 <small style="color:red">Pints</small></td>
		<td>11 <small style="color:red">Pints</small></td>
        </td>
         
         </tr>
         
<?php }
      ?>
    </tbody> 
  </table>
							</div>
							
						</div>
					</div>
					<!-- END OVERVIEW -->
					
				
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 <a href="" target="_blank">Fastnet Technologies</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>

<?php
	include('user_footer.php');
?>