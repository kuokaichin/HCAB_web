<?
    // require common code
    require_once("../../includes/common.php");

        $id = $_SESSION["id"];
        for($i = 0; $i <= 3; $i++)
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
        $sql = "UPDATE  schedules SET Donovan = '$dates[0]', Weiner = '$dates[1]', Katt = '$dates[2]', Stewart = 
'$dates[3]' WHERE id = '$id'";


    // execute query
    $result = mysql_query($sql);

if ($result == true)
    {
        redirect("hcabindexlogin.php");
    }
    // else report error
    apologize("Sorry something broke.");

?>


