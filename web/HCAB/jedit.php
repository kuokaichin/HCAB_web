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
        <link rel="stlyesheet" type= "text/css" href="css/jformstyles.css" >
        <link rel="stylesheet" type="text/css" href="css/hcabstyles.css" >
                <!--[if IE]>
                        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->

    </head>
        <body class="no-js">
            <header>
                <img src="images/websiteheader.png"alt="Top">
            </header>

                <nav id="topNav">
                        <ul>
				  <li><a href="../index.html" title="Home"><c>Home</c></a></li>
                                <li><a href="../aboutus.html" title="About us"><w>About Us</w><ul>
                                                <li><a href="../aboutus.html" title="About Us"><cs>Overview</cs></a></li>
                                                <li><a href="../history.html" title="History"><ws>History</ws></a></li>
                                                <li><a href="../leader.html" title="Our Leaders"><cs>Our Leaders</cs></a></li>
                                                <li class="last"><a href="../buddystories.html" title="Buddy Stories"><ws>Buddy
Stories</ws></a></li>
                                        </ul>
                                </li>
                                <li><a href="../construction.html" title="Media"><c>Media</c></a></li>
                                <li><a href="../joinschedule.html" title="Join Us"><w>Join Us</w></a></li>
                                <li><a href="../contact.html" title="Contact Us"><c>Contact Us</c></a></li>
                                <li><a href="../donate.html" title="Donate"><w>Donate</w></a></li>
                                <li><a href="logout.html" title="Login"><c>Leave</c></a></li>

                        </ul>
                </nav>
                <script src="../nav/js/jquery.js"></script>
                <script src="../nav/js/modernizr.js"></script>

                <br />
                <div class="tab">
                        <div class="row">
                                <? if($i == 36 || $i == 40 || $i == 7 || $i == 3 || $i == 26 || $i == 39 || $i == 80) { 
?>
                                <div class="col1"><a class="center" href="dirindexlogin.php">HOME</a> </div>
                                <? } else { ?>
                                <div class="col1"><a class="center" href="hcabindexlogin.php">HOME</a> </div>
                                <? }?>
                                <div class="colu1"><a class="center" href="journal.php">Journals</a> </div>
                                <? if($i == 36 || $i == 40 || $i == 7 || $i == 3 || $i == 26 || $i == 39 || $i == 80 ) { 
?>
                                <div class="col1"><a class="center" href="volunteers.php">Volunteers</a></div>
                                <? } ?>
                                <div class="col1"><a class="center" href="posting.php">Postings</a> </div>
                                <div class="col2"><a class="center" href="scheduleS.php">Scheduling</a> </div>
                        </div>
                </div>

    
<br />        <br />

            <?$i = $_SESSION["id"];?>
            <?$result = mysql_query("SELECT `date`, `head`, `copy` FROM `jform` WHERE `Author ID`=$i");?>
				    <?= $row["head"]?>
                                <?= date("l, F j, Y, g:i A", strtotime($row["date"]));?>
                                <?= $row["copy"]?>


        <form action="jform2.php" method="post">
            <div class="jform">Entry Title:</div>
            <br />
            <textarea name="title" rows="2" cols="40">
		</textarea>
            <br />
            <br />
            <div class="jform">What things did you learn about your buddy's past-
family, work, pleasures? What did you talk about or do during this visit? Did
something in particular spark his or her interest that you can remember for
next week? Please comment on these things or anything else that you believe is pertinent!
</div>
            <br />
            <textarea name="post" rows="20" cols="40"></textarea>
            <br />
                <br />
                <div class="jnorm">
                        NOTE: Before you submit your entry be sure that you have removed all identifiers 
                </div>
                <br />
                                
          <marg><input type="submit" value="Submit"></marg>
                                                
        </form>
                <br /><br />
                                                
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
                

