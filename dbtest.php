<?php
$dbhost = getenv("PS_SERVICE_HOST");
$dbport = getenv("PS_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

<?php
 
// Connection details
$conn_string = "host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpwd options='--client_encoding=UTF8'";
 
// Establish a connection with MySQL server
$dbconn = pg_connect($conn_string);
 
// Check connection status. Exit in case of errors
if(!$dbconn) {
echo "Error: Unable to open database\n";
} else {
echo "Opened database successfully\n";
}
 
// Close connection
pg_close($dbconn);
 
?>
