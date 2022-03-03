<?php 

require_once "lib/init.php";
$login=new login;
 
//echo basename('admin/images/');

$template=new template('template/logins.php');

$template->allusers=$login->getUser();



//$template->title="This is login page title";

echo $template;