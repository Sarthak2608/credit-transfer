<?php
  session_start();
  if(isset($_SESSION['sid'])){
  $fid=$_SESSION['sid'];
  }
  else{
  	echo "<script>location.href='index.php'</script>";
  }
  include 'header.php';
  $con=mysql_connect('localhost','root','');
  mysql_select_db('webtroll');
  $q="select * from credit1";
  $res=mysql_query( $q);
  
?>
<script type="text/javascript">
	
    function check(){
       var credit=parseInt($('#number').val());
       var sum=parseInt($('#sender_credit').text());
       if(credit<0)
       {
       	$('#msg').text(' Credit cannot be negative zero or negative');
       }
      else if(credit>sum)
       {
       	$('#msg').text('Insufficient Credits');

       }
       else{
       	location.href="process.php?total="+credit;
       }
    }
	$(document).ready(function(){
           
	});
</script>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<div class="container-fluid">
               
               <?php

               while ($row=mysql_fetch_array($res)) {
               	if($row[0]==$fid){
	                echo "<div class='row bg_grey'>
						<div class='col-sm-3'>
							<img src='images/j1.jpg' class='user_img'>
						</div>
						<div class='col-sm-9' class='user_box' style='padding:20px;'>
							

							<span class='user_name'>";
						  
                          echo $row[1];

					   echo "</span><br>
					   <br><span style='color:black;font-size:110%;'>".$row[2]."<br><br>Total Credit:<div id='sender_credit'>".$row[3]."</div></span>
						</div>
					</div>";
				                }
                 }
                 ?>
                
                 	
 
                 <div class="row">
                 	<div class="col-sm-4">
                 		<input type="number" id="number" name="total">
                 	</div>
                 	<div class="col-sm-8">
                 		<button onclick="check();" >Transfer Credit</button>
                 	</div>
                 </div>

                 <div class="row text-center" style="padding:20px;">
                 	<div class="col-sm-9" id="msg" style="color:red;">
                 		
                 	</div>
                 </div>

			</div>
		</div>
	</div>
</div>

<?php
 include 'footer.php';
?>