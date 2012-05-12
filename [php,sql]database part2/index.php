<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..:: shoping ::..</title>
<link type="text/css" rel="stylesheet" href="reset.css"  />
<link type="text/css" rel="stylesheet" href="1styles.css"  />
<link type="text/css" rel="stylesheet" href="mystyle.css"  />
</head>

<body>
<?php
	require_once('db.php');
	
	db_connect();
	
?>

<div class="bg-light">
    <div class="container">
        <div class="heder "></div>
        <div class="content ">
            <div class="row w19">
            	<div class="ax left">
                	<?php
					$rows=db_getrows(0,"ax","kala",1);
					?>
                	<img src="images/<?php echo show_array(0,"ax",$rows) ?>" width="150" height="150"  />
                </div>
                <div class="shadow "></div>
                <div class="text last ml5 ">
                	<?php
					$rows=db_getrows(0,"kalaname","kala",1);
					?>
					<h3><?php echo show_array(0,"kalaname",$rows) ?></h3>
					
					<?php $rows=db_getrows(0,"text","kala",1);?>
					
                    <div class="matn"><?php  echo show_array(0,"text",$rows)?></div>
					
                </div>
                <div class="clear"></div>
            </div>
            <div class="row w19">
            	<div class="ax left">
                	<?php
					$rows=db_getrows(0,"ax","kala",2);
					?>
                	<img src="images/<?php echo show_array(0,"ax",$rows) ?>" width="150" height="150"  />
                </div>
                <div class="shadow "></div>
                <div class="text last ml5 ">
                	<?php
					$rows=db_getrows(0,"kalaname","kala",2);
					?>
					<h3><?php echo show_array(0,"kalaname",$rows) ?></h3>
					
					<?php $rows=db_getrows(0,"text","kala",2);?>
					
                    <div class="matn"><?php  echo show_array(0,"text",$rows)?></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row w19">
            	<div class="ax left">
                	<?php
					$rows=db_getrows(0,"ax","kala",3);
					?>
                	<img src="images/<?php echo show_array(0,"ax",$rows) ?>" width="150" height="150"  />
                </div>
                <div class="shadow "></div>
                <div class="text last ml5 ">
                	<?php
					$rows=db_getrows(0,"kalaname","kala",3);
					?>
					<h3><?php echo show_array(0,"kalaname",$rows) ?></h3>
					
					<?php $rows=db_getrows(0,"text","kala",3);?>
					
                    <div class="matn"><?php  echo show_array(0,"text",$rows)?></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row w19">
            	<div class="ax left">
                	<?php
					$rows=db_getrows(0,"ax","kala",4);
					?>
                	<img src="images/<?php echo show_array(0,"ax",$rows) ?>" width="150" height="150"  />
                </div>
                <div class="shadow "></div>
                <div class="text last ml5 ">
                	<?php
					$rows=db_getrows(0,"kalaname","kala",4);
					?>
					<h3><?php echo show_array(0,"kalaname",$rows) ?></h3>
					
					<?php $rows=db_getrows(0,"text","kala",4);?>
					
                    <div class="matn"><?php  echo show_array(0,"text",$rows)?></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row w19">
            	<div class="ax left">
                	<?php
					$rows=db_getrows(0,"ax","kala",5);
					?>
                	<img src="images/<?php echo show_array(0,"ax",$rows) ?>" width="150" height="150"  />
                </div>
                <div class="shadow "></div>
                <div class="text last ml5 ">
                	<?php
					$rows=db_getrows(0,"kalaname","kala",5);
					?>
					<h3><?php echo show_array(0,"kalaname",$rows) ?></h3>
					
					<?php $rows=db_getrows(0,"text","kala",5);?>
					
                    <div class="matn"><?php  echo show_array(0,"text",$rows)?></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="footer">
            <div class="w22"></div>
        </div>
    </div>
</div>
<?php
	db_close();
	
?>
</body>
</html>
