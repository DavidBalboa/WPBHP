<?php
/*
    Template Name: Logout
 */
echo '<script type="text/javascript">
	
session_start();
session_destroy(); 
header("Location: localhost/wordpress2/Login");
</script>';


?>