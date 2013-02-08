<?
    // require common code
    require_once("../../includes/common.php");

	$id = $_SESSION["id"];
	for($i = 0; $i <= 5; $i++)
	{
		if($_POST[$i] != NULL)
		{
			$dates[$i] = "yes";
		}
		
		else
		{
			$dates[$i] = "no";
		}
	}		

	// prepare sql to put user into database
	$sql = "UPDATE  schedulew SET sept30 = '$dates[0]', oct7 = '$dates[1]', oct14 = '$dates[2]', oct21 = '$dates[3]', oct28 = '$dates[4]', 
nov4 = '$dates[5]' WHERE id = '$id'";

    // execute query
    $result = mysql_query($sql);

if ($result == true)
    {
        redirect("hcabindexlogin.html");
    }
    // else report error
    apologize("Sorry something broke.");

?>
