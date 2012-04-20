<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@@ banner @@</title>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js"></script>
</head>

<body>
<div class="contaner">
	<div class="left">
    	<input type="button" name="back" id="back" />
    </div>
    <div class="right">
    	<input type="button" name="next" id="next" />
    </div>
	<div class="midel">
        <div class="banner">
            <div class="scrol">
                <?php 
					$directory='./images/ax';
					$type_image=array('jpeg','png','gif','jpg');
					$d=dir($directory);
					$num_pic=0;
					while( $f=$d->read() ){
						$file_type=end(explode('.',$f));
						if(!in_array(strtolower($file_type),$type_image)) continue;
						echo "<div><img src='$directory/$f' /></div>"	;
						$num_pic++;
					}
					
				?>
            </div>
        </div>
	</div>
	<ul class="dokme">
    	<?php
				for($i=1;$i<=$num_pic;$i++){
					echo "<li><div></div></li>";	
				}
			?>	
    </ul>
</div>
</body>
</html>