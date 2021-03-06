<?

    // require common code
    require_once("../../includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Alzheimer's Buddies at Harvard College</title>
        <link rel="stylesheet" href="../nav/css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/hcabstyles.css" >
                <!--[if IE]>
                        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->

    </head>
        <body class="no-js">
            <header>
                <img class="size" src="images/logo-horiz2wblue.png" width="1359" height="214"/>
            </header>

                <nav id="topNav">
                        <ul>
                                <li><a href="../index.html" title="Home"><w>Home</w></a></li>
                                <li><a href="../aboutus.html" title="About us"><w>About Us</w><ul>
                                                <li><a href="../aboutus.html" title="About Us"><ws>Overview</ws></a></li>
                                                <li><a href="../history.html" title="History"><ws>History</ws></a></li>
                                                <li><a href="../leader.html" title="Our Leaders"><ws>Our Leaders</ws></a></li>
                                                <li class="last"><a href="../buddystories.html" title="Buddy Stories"><ws>Buddy
Stories</ws></a></li>
                                        </ul>
                                </li>
                                <li><a href="../construction.html" title="Media"><w>Media</w></a></li>
                                <li><a href="../joinschedule.html" title="Join Us"><w>Join Us</w></a></li>
                                <li><a href="../contact.html" title="Contact Us"><w>Contact Us</w></a></li>
                                <li><a href="../donate.html" title="Donate"><w>Donate</w></a></li>
                                <li><a href="logout.html" title="Login"><w>Leave</w></a></li>
                        </ul>
                </nav>
                <script src="../nav/js/jquery.js"></script>
                <script src="../nav/js/modernizr.js"></script>


            <?$i = $_SESSION["id"];?>
            <?$result = mysql_query("SELECT `date`, `head`, `copy` FROM `journals_old` WHERE `Author ID`=$i ORDER BY `date` 
DESC");?>

<br />
                <div class="tab">
                        <div class="row">
				<? if($i == 36 || $i == 40 || $i == 7 || $i == 3 || $i == 26 || $i == 39 || $i == 80) { ?> 
				<div class="col1"><a class="center" href="dirindexlogin.php">HOME</a> </div>
				<? } else { ?>
				<div class="col1"><a class="center" href="hcabindexlogin.php">HOME</a> </div>
				<? }?> 
                                <div class="col1"><a class="center" href="journal.php">Journals</a> </div>
								<div class="colu1"><a class="center" href="journal_old.php">Old Journals</a></div>
                                <? if($i == 36 || $i == 40 || $i == 7 || $i == 3 || $i == 26 || $i == 39 || $i == 80 ) { ?>
                                <div class="col1"><a class="center" href="jreview.php">Journal Review</a></div>
                                <div class="col1"><a class="center" href="jreview_old.php">Old Journal Review</a></div>
								<? } ?>
                                <div class="col1"><a class="center" href="posting.php">Postings</a> </div>
                                <div class="col2"><a class="center" href="scheduleS.php">Scheduling</a> </div>
                        </div>
                </div>

		<br />
		<br />

                <div class="image">
                        <img src="images/singleflower.png" alt="forget-me-not" width="143" height="135"/>
                        <div class="title">
                        My Journal Entries
                        </div>
                </div>
		<br /><br />
		<br /> <br />
		<br />
                <?while ($row = mysql_fetch_array($result)):?>
			<div class="jtitle">
				<?= $row["head"]?>
			</div>
			
			<div class="jwords">
				<?= date("l, F j, Y, g:i A", strtotime($row["date"]));?>
			</div>

			 <div class="aindent">
                        	<br />
				<?= $row["copy"]?>
	                </div>
		<? endwhile ?>

                <div class="footer">
                Designed by a Rennix?
                        <div class="right">
                        &#169;
                        Harvard College Alzheimer's Buddies
                        </div>
                </div>
		<br /><br /><br />           
                                
    </body>
                                                
</html>
                   
