<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "contact");

// Check connection
if($link === false){

	die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
//Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);



$sql = "INSERT INTO contact (firstname, lastname, email, message) VALUES ('$firstname', '$lastname', '$email', '$message')";
if(mysqli_query($link, $sql)){

	echo "Records added successfully.";

} else{

	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}


// close connection

mysqli_close($link);

header( "Location: http://localhost/project_css/contact.php" );
?>

