<?php
$dbhost = getenv("PS_SERVICE_HOST");
$dbport = getenv("PS_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

$connection =  pg_connect($dbhost, $dbport, $dbname, $dbuser, $dbpwd);
echo "<h2>" . $dbuser . "</h2>";
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
