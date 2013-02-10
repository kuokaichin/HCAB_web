<?

    // require common code
    require_once("../../includes/common.php");

    // make sure user entered username and password
    if ($_POST["conc"] == NULL || $_POST["grad"] == NULL || $_POST["phone"] == NULL || $_POST["house"] == NULL || 
$_POST["room"] == NULL || $_POST["home"] == NULL)
    {
        apologize("None of the fields can be blank. Please fill them in.");
    }


    // escape username aka email and such to avoid SQL injection attacks
    $conc = mysql_real_escape_string($_POST["conc"]);
    $grad = mysql_real_escape_string($_POST["grad"]);
    $phone = mysql_real_escape_string($_POST["phone"]);
    $house = mysql_real_escape_string($_POST["house"]);
    $room = mysql_real_escape_string($_POST["room"]);
    $home = mysql_real_escape_string($_POST["home"]);

    $id =  $_SESSION["id"];
    // prepare sql to put user into database
    $sql = "UPDATE  members SET Concentration = '$conc', Graduation = '$grad', Phone = '$phone', House = '$house', Room = 
'$room', Home = '$home' WHERE id = '$id'";

    // execute query
    $result = mysql_query($sql);

	if ($result == true)
	{
		// prepare sql to put user into schedulew database
    		$sql = "INSERT INTO schedulew (id) VALUES('$id')";

    		// execute query
    		$result = mysql_query($sql);
	
		if ($result == true)
		{

                 	// prepare sql to put user into schedulew database
                	$sql = "INSERT INTO schedules (id) VALUES('$id')";

                	// execute query
                	$result = mysql_query($sql);
 	   		
			// if user was inserted thank the computer gods
    			if ($result == true)
    			{
				redirect("hcabindexlogin.php");
			}	
    	
			// else report error
    			apologize("Sorry something broke.");
		}
	}

?>


