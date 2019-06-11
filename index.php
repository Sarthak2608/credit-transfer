<?php
  include 'header.php';
  if(isset($_GET['status']))
  {
  	if($_GET['status']==1)
  	echo "<script>alert('Transaction is success')</script>";
    else{
    	echo "<script>alert('Error')</script>";
    }
  }
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 text-center">
			<a href="view_all_user.php"><div class="btn1">View All Users</div>
		</div>
		
		
	</div>
</div>

<?php
 include 'footer.php';
?>