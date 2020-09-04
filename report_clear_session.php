<?php session_start();

session_destroy();
header('Location: report_index.php');
exit();
?>