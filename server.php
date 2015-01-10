<?php
mysql_connect('localhost','root','');
mysql_select_db('test');
$var = $_POST["input1"];
$query = "INSERT into hello values('','$var','')";
mysql_query($query);



?>