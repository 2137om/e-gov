

<?php 
    
	$uid='9422419298';//10 digit mobile number

$pwd='Q2355F';

$phone='9823228249';

$msg='from way 2 sms master ' ;

include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $msg);
?>

