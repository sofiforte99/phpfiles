<?php
session_start();
echo "Bienvenido " . $_SESSION['email'];
echo "<a href = 'logout.php'>Logout</a>";






?>