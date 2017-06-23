<?php

$add = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$Host_name = $_SERVER['SERVER_NAME'];
echo $add,'<br />'.$agent.'<br />'.$Host_name.'.';

?>