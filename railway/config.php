<?php
/*For My LocalPC*/
$con=mysql_connect ("localhost", "root", "","d24") or die ("Unable to connect ");
//create a variable
$User_name=$_post['username'];
$email=$_post['email'];
$password=$_post['password'];
//excute the query
$a=("INSERT INTO railway VALUES('$Username''$Email''$pass')");
Mysqli_query($con,$a);


?>



