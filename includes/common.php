<?
    // display errors and warnings but not notices
    ini_set("display_errors", true);
    error_reporting(E_ALL ^ E_NOTICE);

    // enable sessions, restricting cookie to /~username/Project/
    if (preg_match("{^(/~[^/]+/Project/)}", $_SERVER["REQUEST_URI"], $matches))
        session_set_cookie_params(0, $matches[1]);
    session_start();

    // requirements
    require_once("constants.php");
    require_once("helpers.php");


    // require authentication for most pages
    if (!preg_match("{/(:?login|logout|register|index)\d*\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (!isset($_SESSION["id"]))
            redirect("http://www.hcs.harvard.edu/hcalzbuddies/HCAB/login.html");
    }

    // connect to database server
    if (($connection = @mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)) === false)
        apologize("Could not connect to database server.");

    // select database
    if (@mysql_select_db(DB_NAME, $connection) === false)
        apologize("Could not select database (" . DB_NAME . ").");

?>
