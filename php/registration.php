<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['firstname']=='' || $_REQUEST['lastname']=='' || $_REQUEST['email']=='' || $_REQUEST['message']=='')
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
{


//Echo "please fill the empty field.";
}

Else
{
$sql="insert into contact(firstname,lastname,email,message) values('".$_REQUEST['firstname']."', '".$_REQUEST['lastname']."', '".$pass ."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}
?>