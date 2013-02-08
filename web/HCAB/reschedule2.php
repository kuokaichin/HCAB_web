<?
    // require common code
    require_once("../../includes/common.php");

        $id = $_SESSION["id"];

                if($_POST["g"] == 1)
                {
                        $shift = "early";
                }

                if($_POST["g"] == 2)
                {
                        $shift = "late";
                }

        // prepare sql to put user into database
        $sql = "UPDATE  hello SET Shift = '$shift' WHERE id = '$id'";


    // execute query
    $result = mysql_query($sql);

if ($result == true)
    {
        redirect("hcabindexlogin.php");
    }
    // else report error
    apologize("Sorry something broke.");

?>


