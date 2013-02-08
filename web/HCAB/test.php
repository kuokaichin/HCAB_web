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
                <img src="images/websiteheader.png"alt="Top">
            </header>

                <nav id="topNav">
                        <ul>
                                <li><a href="../index.html" title="Home"><c>Home</c></a></li>
                                <li><a href="../aboutus.html" title="About us"><w>About Us</w><ul>
                                                <li><a href="../aboutus.html" title="About Us"><cs>Overview</cs></a></li>
                                                <li><a href="../history.html" title="History"><ws>History</ws></a></li>
                                                <li><a href="../leader.html" title="Our Leaders"><cs>Our 
Leaders</cs></a></li>
                                                <li class="last"><a href="../buddystories.html" title="Buddy
Stories"><ws>Buddy
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
<script type="text/javascript">
<!--
function passData2(url,data){
var str=data
location.href = url + '?curID=' +  str
//window.open(url + '?' + str,'win1','left=300,top=100,width=300,height=300')
}
//-->
</script>
<? $numb[0] = 39; ?>
<? $numb[1] = 42; ?>
<? $i =1; ?>
<a href="#null" onclick="passData2('test2.php','<? echo $numb[$i] ?>');return false">Pass Data2</a> 
</body>
</html>
