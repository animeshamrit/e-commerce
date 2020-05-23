<?php 
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'kartdata');
	if(isset($_GET['delete']))
	{
		$ID=$_GET['delete'];
		$query="DELETE FROM articleswish WHERE name='$ID'";
		$qu=mysqli_query($con,$query);
		if($qu)
		{
			header("refresh:0.5; url=wish.php");
		}
	}
	?>