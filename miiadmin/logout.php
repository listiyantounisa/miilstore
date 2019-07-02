<?php
session_start();

setcookie('user','', time() - 3600);
session_destroy();

header('location: /miistore/miiadmin/');
exit();
?>

