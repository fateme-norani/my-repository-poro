<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="reset.css" />
<link type="text/css" rel="stylesheet" href="1styles.css" />
<link type="text/css" rel="stylesheet" href="mystyle.css" />
</head>

<body>
<html>
<body>
<div class="container">
	<div class="vasat w10">
        <form action="index.php" method="post" enctype="multipart/form-data">
            filename :<input type="file" name="file" id="file" /> 
            <br /><br/>
            <input type="submit" name="submit" value="Submit" />
        </form>
       
        <?php
        if ($_FILES["file"]["error"] > 0)
          {
          echo "Error: " . $_FILES["file"]["error"] . "<br />";
          }
        else
          {
			?> 
         <p> Upload :</p><?php echo $_FILES["file"]["name"] . "<br />" ;?>
         <p>Type : </p><?php echo $_FILES["file"]["type"] . "<br />"; ?>
       	 <p> Size : </p><?php echo ($_FILES["file"]["size"] / 1024) . " Kb<br />"; ?>
         <p> Stored in :</p> <?php echo  $_FILES["file"]["tmp_name"]; 
          }
        ?>
    </div>
</div>
</body>
</html>
</html>