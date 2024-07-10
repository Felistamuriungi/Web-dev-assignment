<?php
//create the database connection using constants previously created
 
//insert constants content
require_once ("constants.php");

//create the database connection
$database = new mysql(HOSTNAME,HOSTUSER,HOSTPASS,DBNAME);

//verify the connection 
if($database->connect_error){
    die("Connection Failed:" . $database->connect_error);
}else{
    print "The Connection Was Successful!!! :-)";
}

 
?>