 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="c-get.css" />
<script type="text/javascript" src="js-get.js"></script>
</head>
<body>
<div class="box">
	<form class="frm" action="" name="frm" >
    	<input type="text" name="add1" value="add1" />*
      	<input type="text" name="add2" value="add2" /><br/>
        <input class="ok" type="submit"  />
    </form>
    <a href="./">new table</a>
</div>

<div class="table">
<?php

$n=$_GET['add1'];
$m=$_GET['add2'];

echo '<table border="1">';
for($i=1;$i<$n;$i++){
	echo '<tr>';
	for($j=1;$j<$m;$j++){
		echo '<td>'.($i*$j).'</td>';	
	}
	echo '</tr>';
}
echo '</table>';

?>
</div>
</body>
</html>