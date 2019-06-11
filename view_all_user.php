<?php
  session_start();
  include 'header.php';
  $con=mysql_connect('localhost','root','');
  mysql_select_db('webtroll');
  $q="select * from credit1";
  $res=mysql_query( $q);
  
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<div class="container-fluid">
               
               <?php

               while ($row=mysql_fetch_array($res)) {
	                echo "<a href='process.php?sid=".$row[0]."'><div class='row bg_grey'>
						<div class='col-sm-3'>
							<img src='images/j1.jpg' class='user_img'>
						</div>
						<div class='col-sm-9' class='user_box' style='padding:20px;'>
							

							<span class='user_name'>";
						  
                          echo $row[1];

					   echo "</span><span style='float:right;font-size:110%;color:black;'>";
					   echo $row[3];
						echo "</span></div>
					</div></a>";
                 }
                 ?>
			
			</div>
		</div>
	</div>
</div>

<?php
 include 'footer.php';
?>