
<?php
session_start();
session_unset();
$_SESSION = array(); 
unset($_SESSION['fname'],$_SESSION['user_email']);
session_destroy();
header('location:http://localhost/trphtml/admin/login.php');
exit;

?>

    