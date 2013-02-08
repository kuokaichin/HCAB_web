<?

    // require common code
    require_once("../../includes/common.php"); 
      
    // make sure user entered username and password
    if ($_POST["title"] == NULL || $_POST["post"] == NULL)
    {
        apologize("None of the fields can be blank. Please fill them in.");
    }
             
    // escape username to avoid SQL injection attacks
    $title = mysql_real_escape_string($_POST["title"]);
    $post = mysql_real_escape_string($_POST["post"]);
    
    $id = $_SESSION["id"];
    
    // prepare sql to put user into database
    $sql = "INSERT INTO `jform`(`Author ID`, `head`, `copy`) VALUES ('$id', '$title', '$post')";


    // execute query
    $result = mysql_query($sql);

        // if we found user, check password
    if ($result == true)
    {
        // prepare SQL
    $sql = "SELECT * FROM hello WHERE id='$id'";
    
    // execute query
    $result = mysql_query($sql);

    // if we found user, check password
    if (mysql_num_rows($result) == 1)
    {
        // grab row
        $row = mysql_fetch_array($result);
        $posts = $row[3];
        $posts++;
        
        $sql = "UPDATE `hello` SET `jposts`=$posts WHERE id=$id";
        $result=mysql_query($sql);

            // redirect to portfolio
            redirect("journal.php");
     }
     apologize("Fail at update post count");
     }
    // else report error
    apologize("Fail at save blog :(");

?>
