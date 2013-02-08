<?

    // require common code
    require_once("../../includes/common.php");

	for($i = 0; $i <= 5; $i++)
	{
		if($_POST["'$i'"] != NULL)
		{
			$dates[$i]="yes";
		}
	}
echo "Hello $dates";
?>
