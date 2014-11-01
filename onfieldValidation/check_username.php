<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('sample');

$username = mysql_real_escape_string($_POST['username']);

$result = mysql_query('select name from sample where name = "'. $username .'"');

if(mysql_num_rows($result)>0){
	echo 0;
}else{
	echo 1;
}

?>