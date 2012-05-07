<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>basic database</title>
</head>

<body>

<?php
	
	function db_error(){
		$eror_num=mysql_errno();
		$eror_text=mysql_error();
		die( "error $eror_num:$eror_text ")	;
	}
	
	$sql_con=@mysql_connect("localhost","root","") or db_error();
	//echo "ok";
	mysql_select_db('mydb',$sql_con) or db_error();
	
	$res=mysql_query("select * from  phonebook WHERE lname='mahdavi'") or db_error() ;
	while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
		echo "$row[fname] $row[lname] <br/>";
	};
	
	
	mysql_close($sql_con);

?>

<pre>
<?php
	print_r($row);
?>
</pre>

</body>
</html>