<?

    // require common code
    require_once("../../includes/common.php"); 
      
    // make sure user entered username and password
    if ($_POST["email"] == NULL || $_POST["first"] == NULL || $_POST["last"] == NULL || $_POST["password"] == NULL || $_POST["password2"] == NULL || $_POST["affl"] == 
"Select one")
    {
        apologize("None of the fields can be blank. Please fill them in.");
    }
    

    // make sure email is properly formatted
    $check = "@";
    $sl = strlen($_POST["email"]);
    $t=1;
    for ($i = 0; $i < $sl; $i++)
        {if($_POST["email"][$i] == $check){
           $t=0;
           }
        }
    if($t==1)
    {
        apologize("Your email address was formatted incorrectly or wasn't a valid email address. ");
    }
        
        
    // make sure passwords match
    if ($_POST["password"] != $_POST["password2"])
    {
        apologize("Please make sure you typed the same password twice.");
    }


    // escape username aka email and such to avoid SQL injection attacks
    $username = mysql_real_escape_string($_POST["email"]);
    $first = mysql_real_escape_string($_POST["first"]);
    $last = mysql_real_escape_string($_POST["last"]);
    
    // create hash
    $hash = crypt($_POST["password"]);
    

    // make sure that the user doesn't already have that email with an account
	$sql = "SELECT * FROM members WHERE email = '$username'";
	$result = mysql_query($sql);
	$exists = mysql_num_rows($result);
	if($exists >= 1)
	{
		apologize("Sorry this email address already has an account.");
	}



    // prepare sql to put user into database
    $sql = "INSERT INTO members (email, hash, fname, lname) VALUES('$username', '$hash', '$first', '$last')";
      
    // execute query
    $result = mysql_query($sql);

    // if user was inserted thank the computer gods
    if ($result == true)
    {
        // remember that user's now logged in by caching user's ID in session
        $_SESSION["id"] = mysql_insert_id();
        
	// check if volunteer- if not change to 1 or 2    
	if($_POST["affl"] != 0)
	{
		$affl = $_POST["affl"];	
		$sql = "UPDATE members SET Volunteer = '$affl' WHERE email = '$username'";
		$result = mysql_query($sql);
		if ($result == false)
		{
		apologize("Something broke. Try again, please.");
		}
		
		if ($affl == 2)
		{
			redirect("personnelA.html");
		}
		else
		redirect("personnelB.html");

	}

	// redirect to further information page
        redirect("personnelB.html");
    }


    // else report error
    apologize("Sorry you already have an account. Try requesting a new password.");

?>
