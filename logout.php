<?php
session_start();
session_destroy();
$page='1.html';
header("Location:".$page);
exit();
?>
