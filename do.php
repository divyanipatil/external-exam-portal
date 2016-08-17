<?php

	require 'connect.inc.php';
	require 'core.inc.php';
	if(!isloggedina() || isloggedins() || isloggedint())
	{  
		header('Location: error.php');
	}
	else
	{
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome.min.css" rel="stylesheet">
	    <link href="login.css" rel="stylesheet">
	    
	    <style>
  	 #naam {
                    border-right: 1px solid gray;
                    padding-right: 4px;
                }
    </style> 
  	</head>
  	  
  	<body>

	
		<nav class = "navbar navbar-default" role = "navigation">
   
   		<div class = "navbar-header">
		  <button type = "button" class = "navbar-toggle" 
		     data-toggle = "collapse" data-target = "#nav">
		     <span class = "sr-only">Toggle navigation</span>
		     <span class = "icon-bar"></span>
		     <span class = "icon-bar"></span>
		     <span class = "icon-bar"></span>
		  </button>
		  <a class = "navbar-brand" href = "#">External Exam Portal</a>
		</div>
   
   		<div class = "collapse navbar-collapse" id = "nav">	
			<ul class = "nav navbar-nav navbar-right">  
			<?php echo "<li id='naam'>".$_SESSION['fname']."<br>".$_SESSION['lname']."</li>"; ?>
			<li><a href='home.php'>Home</a></li>
			<li><a href='myprofilea.php'>My Profile</a></li>
		    <li class="active"  ><a <?php if(isalert()){?> style="color:red;" <?php } ?> >Update</a> </li>
			<li><a href='cpwda.php'>Change Password</a></li>
			<li><a href='logout.php'>Logout</a></li>
			</ul>
		</div>
		</nav>
		<div class ="container">
		<ul class="list-group">
			<li class="list-group-item"><a href="stu.php"><b>Update Student's information</b></a></li>
			<li class="list-group-item"><a href="tch.php"><b>Update Teachers's information</b></a></li>
			<li  class="list-group-item"> <?php if(isalert()){?> <span class="badge">Courses need to be updated</span> <?php } ?>  <a <?php if(isalert()){?> style="color:red;" <?php } ?> href="crs.php"><b>Update Course information</b></a></li>
		</ul>
		</div>
</html>
<?php
}
?>
