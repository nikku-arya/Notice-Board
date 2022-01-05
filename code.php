<?php
  
	  $con= mysqli_connect("localhost", "root", "") ;
	  if(!$con)
	  {
	  				 echo "not connected to server	"	;
	  				 }
	  				 
	
	  	
	  	$db= mysqli_select_db($con, "online_notice_board");
	  	if(!$db)
	  	{
	  					echo " not connected to database";
	  	}
	  	
	  
	  	
	  	if(isset($_POST['register'])){
	  	
	  	  		  $query = "INSERT INTO users (fname, lname, email, password, class) VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
	  	  $query_run= mysqli_query($con, $query);

	  	  if(!$query_run) 
	  	  {
	  	  				echo mysqli_error($query);	 
	  	  				}            
	  	  				else
	  	  {
	  	  				  echo "<script>alert('successfully  registeted');</script>";
	  	  }
	  	  	  }
	  	?>
