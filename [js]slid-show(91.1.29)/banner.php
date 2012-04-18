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
					$d=dir('./images/ax');
					while($f=$d->read()){
						if(strtolower(substr($f,-4))!='.jpg') continue;
						echo "<img src='images/ax/$f' width='640' height='366' />";
						$piclen+=1;	
					}
				?>
            </div>
        </div>
	</div>
	<ul class="dokme" style="width:" <?php echo '(640*$piclen)+"px"' ;?> ; ">
    	<?php
				for($i=1;$i<=$piclen;$i++){
					echo "<li><div></div></li>";	
				}
			?>	
    </ul>
</div>
</body>
</html>