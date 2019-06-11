<?php
session_start();
if(isset($_GET['rid']))
  {
  	$_SESSION['rid']=$_GET['rid'];
  	if(isset($_SESSION['sid'])&&isset($_SESSION['total']))
  	{
  		  $con=mysql_connect('localhost','root','');
		  mysql_select_db('webtroll');
		  $q="update credit1 set total=total-".$_SESSION['total']." where id=".$_SESSION['sid'];
		  mysql_query( $q);
		  $q="update credit1 set total=total+".$_SESSION['total']." where id=".$_SESSION['rid'];
		  mysql_query( $q);
		  echo "<script>location.href='index.php?status=1'</script>";
  	}
  }
  if(isset($_GET['sid']))
  {
  	$_SESSION['sid']=$_GET['sid'];
  	echo "<script>location.href='about_user.php'</script>";
  }
  if(isset($_GET['total']))
  {
  	$_SESSION['total']=$_GET['total'];
  	echo "<script>location.href='select_user.php'</script>";
  }

?>