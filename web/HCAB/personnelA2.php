<?

    // require common code
    require_once("../../includes/common.php");

    // make sure user entered username and password
    if ($_POST["affl"] == NULL)
    {
        apologize("None of the fields can be blank. Please fill them in.");
    }


    // escape username aka email and such to avoid SQL injection attacks
    $affl = mysql_real_escape_string($_POST["affl"]);

    $id =  $_SESSION["id"];
    // prepare sql to put user into database
    $sql = "INSERT INTO personnela  (id, affl) VALUES ('$id', '$affl')";

    // execute query
    $result = mysql_query($sql);

    // if user was inserted thank the computer gods
    if ($result == true)
    {
        redirect("dirindexlogin.php");
    }
    // else report error
    apologize("Sorry something broke.");

?>


