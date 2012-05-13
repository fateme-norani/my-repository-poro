
<?php
	require_once('inc/modules.php');
	
	include('inc/heder.php');
	
	
?>
<?php
db_connect();

$kalaha= db_getrows('kala');

show_poroduct($kalaha);


db_close();
?>
            
            
<?php
	
	include('inc/footer.php');
	
?>
