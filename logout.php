<?php
session_start();

session_destroy();

echo "    <div class=\"container-fluid text-right\"><strong>Te voilà déconnecté !</strong></div>";


require 'inc/head.php';
?>
