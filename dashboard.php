<?php 
   session_start();
   if(isset($_POST['edit_button'])){
    $con= mysqli_connect("localhost", "root", "") ;
	  $db= mysqli_select_db($con, "online_notice_board");	
	  $query="update users set fname='$_POST[fname]' ,lname='$_POST[lname]',email='$_POST[email]', password='$_POST[password]',class=$_POST[class]
    where email='$_SESSION[email_id]' ";
    $query_run= mysqli_query($con, $query);
    if($query_run){
        echo "<script>alert('updated successfully');
        window.location.href('dashboard.php')</script>";
    }
    else{
          echo "<script>alert('cant updated successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
				<title>user dashboard</title>
				<link rel="stylesheet"  href="style.css">
			
				

<link rel="stylesheet" href="bootstrap.min.css">
				<script src= "bootstrap.min.js" charset="utf-8"></script>
				<script src="juqery_latest.js" charset="utf-8"></script>
<script>
				$(document).ready(function(){
								$("#edit_button").click(function(){
												$("#main_content").load('edit_profile.php');
								}) ;
								
								$("#view_notice").click(function(){
												$("#main_content").load('view_notice.php');
								}) ;
								
								
				}) ;
</script>

</head>
   <body>
     <div class="row" id="header">
       <div class="col-md-4">
       </div>
       <div class="col-md-4">
         <center><h3> Online Notice Board </h3></center>
       </div>
       <div class="col-md-4">
       </div>
     </div>
   <br>
 
     
    
    
    <section id="container">
      <div class="row">
        <div class="col-md-3" id="left_side">
       <center><img src="Nitin.jpg" class="img-rounded" width="200px" height="200px">
       <br>
    
         email:- <b><?php echo $_SESSION['email_id']; ?></b>
         username:- <b><?php echo $_SESSION['name']; ?></b>
          <br>
          <button type="button" class="btn btn-primary btn-block" id="edit_button">Edit Profile</button>
          <button type="button" class="btn btn-warning btn-block" id="view_notice">View Notices</button>
          
          <a href="logout.php" type="button" class="btn btn-success btn-block" >Logout</a><br>
         </center>
        </div>
        
        <div class="col-md-8" id="main_content">
          <br>
          <h2>Welcome to user Dashboard</h2>
          <br>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
        </div>
      </div>
    </section>
    
  </body>
  </html>
