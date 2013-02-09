<!DOCTYPE html>

<html>
    <head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="QIrAmtihNVke6kjNeodWYQcTq2BrGHXL4DG6VI230ig" />

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Harvard College Alzheimer's Buddies: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Harvard College Alzheimer's Buddies (HCAB)</title>
        <?php endif ?>

        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>

		
    </head>
	
	<body>
			<header class="jumbotron subhead" id="overview">
				<div class="container">
					<a href="http://www.hcs.harvard.edu/hcalzbuddies/html/index.php">
						<img src="../HCAB/images/logo-horiz2wblue.png"/ width="700" >
					</a>
				</div>
			</header>

	
		<div class="container-fluid" id="middle">

			<ul class="nav nav-tabs">  
					<li class="active"><a href="aboutus.html">Home</a></li>  
					<li class="dropdown">  
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<b class="caret"></b></a>  
					  <ul class="dropdown-menu">  
						<li><a href="aboutus.html">Overview</a></li>  
						<li><a href="history.html">History</a></li>  
						<li><a href="leader.html">Our Leaders</a></li>  
						<li><a href="buddystories.html">Buddy Stories</a></li>  
					  </ul>  
					</li>  
					<li><a href="construction.html">Media</a></li>  
					<li><a href="joinschedule.html">Join Us</a></li>  
					<li><a href="contact.html">Contact Us</a></li>  
					<li><a href="donate.html">Donate</a></li>  
					<li><a href="HCAB/login.html">Login</a></li>  
				  </ul>  
			</li>  
			</ul>
