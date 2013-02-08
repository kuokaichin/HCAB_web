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
                <img src="images/header2.png"alt="Top">
            </header>

                <nav id="topNav">
                        <ul>
                                <li><a href="../index.html" title="Home"><w>Home</w></a></li>
                                <li><a href="../aboutus.html" title="About us"><w>About Us</w><ul>
                                                <li><a href="../aboutus.html" title="About Us"><ws>Overview</ws></a></li>
                                                <li><a href="../history.html" title="History"><ws>History</ws></a></li>
                                                <li><a href="../leader.html" title="Our Leaders"><ws>Our Leaders</ws></a></li>
                                                <li class="last"><a href="../buddystories.html" title="Buddy 
Stories"><ws>Buddy
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
		<script src="js/volunteer.js"></script>
<script type="text/javascript">
<!--
function passData2(url,data){
var str=data
location.href = url + '?curID=' +  str
//window.open(url + '?' + str,'win1','left=300,top=100,width=300,height=300')
}
//-->
</script>  

	        <?$result = mysql_query("SELECT `id`, `jposts`, `Fname`, `Lname` FROM `hello` WHERE `Volunteer`<2");?>
		<br />
                <div class="tab">
                        <div class="row">
                                <div class="col1"><a class="center" href="dirindexlogin.php">HOME</a> </div>
                                <div class="col1"><a class="center" href="journal.php">Journals</a> </div>
                                <div class="colu1"><a class="center" href="volunteers.php">Volunteers</a></div>
                                <div class="col1"><a class="center" href="posting.php">Postings</a> </div>
                                <div class="col2"><a class="center" href="scheduleS.php">Scheduling</a> </div>
                        </div>
                </div>

                <br />
                <br />
<? $c = 0; ?>
<? $color[0] = red; ?>
<? $color[1] = green; ?>
<? $color[2] = purple; ?>
<? $color[3] = yellow; ?>
<? $color[4] = black; ?> 
                <? $pt = mysql_query("SELECT `date`, `head`, `copy` FROM `jform` WHERE `Author ID`=3");?>
		<? $pt = mysql_query("SELECT `date`, `head`, `copy` FROM `jform` WHERE `Author ID`= 50 ORDER BY `date` 
DESC");?>
                                        <? $r = mysql_fetch_array($pt)?>
		<div class="journalList">
<br />
KEY: Ryan<<? echo $color[1]?>>- Green</<? echo $color[1]?>>,
 Jessica<<? echo $color[2]?>>- Purple</<? echo $color[2]?>>,
 Anita<<? echo $color[3]?>>- Gold</<? echo $color[3]?>>,
 Kuo-Kai<<? echo $color[4]?>>- Black</<? echo $color[4]?>>,
 Michelle<<? echo $color[0]?>>- Red</<? echo $color[0]?>>
<br />
	                <?while ($row = mysql_fetch_array($result)):?>
				<br /><br />
                                <? $current = $row["id"]; ?>
				<? $num_rows = mysql_num_rows($result); ?>
				<? for ($i = 0; $i< 1; $i++){ ?>
				<? $num[$i] = $current; ?>
				<? $c++ ?>
				<? if($c > 4){ ?>
				<? $c = 0; } ?>
<a href="#null" onclick="passData2('volunj.php','<? echo $num[$i] ?>');return false">
<<? echo $color[$c]?>>				<? echo $row["Lname"]?> , <? echo $row["Fname"]?>
</<? echo $color[$c]?>></a>

				
				<? $posts = $row["jposts"]; ?>
				<br />
				<div class="journalList2"> 
				Number of Journal Posts: <?= $posts?>
					<? if($posts >= 1) { ?>
					<?//Useless crap from the fix last time?>
		                        <? $pt = mysql_query("SELECT `date`, `head`, `copy` FROM `jform` WHERE `Author ID`=$current");?>
					<? /*Actually useful stuff*/ ?>
      <? $pt = mysql_query("SELECT `date`, `head`, `copy` FROM `jform` WHERE `Author ID`= $current ORDER BY `date` ASC");?>

                                        <?while ($r = mysql_fetch_array($pt)):?>
		                                 <? $dt = date("l, F j, Y, g:i A", strtotime($r["date"]));?>
							
                                        <? endwhile ?>

                                        <br />
                                        Last Entry:
                                        <?= $dt?>
					<?} ?>
				</div>	
				<? } ?>
			<? endwhile ?>
		</div>
		<br /><br /><br />
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

