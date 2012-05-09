<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
<link type="text/css" rel="stylesheet" href="reset.css" />
<link type="text/css" rel="stylesheet" href="1styles.css" />
<link type="text/css" rel="stylesheet" href="mystyle.css" />
</head>
<body>
<div class="container">
	<div class="heder w22">
        <h1>Upload image</h1>
        <form action="index.php" method="post" enctype="multipart/form-data" name="form1" >
            <input type="file" name="myfile" value="" /><br/>
            <input name="Submit" type="submit" value="" />
        </form>
    </div>
    
    <div class="show w24">
		<?php
       
			function upload_img($dir_path, $size_limit){
			
				$file = $_FILES['myfile'];
				$size_limit *=1024; // to KB
			
				if( $file['error'] !== 0 ){
					echo '<div class="text w24">Error in uploading.</div>';
					return false;
				}
			
				if( substr($file['type'],0,6) != 'image/' ){
					echo '<div class="text w24">Error in file type.</div>';
					return false;
				}
			
				if( $file['size'] > $size_limit ){
					echo '<div class="text w24">Error in file size.</div>';
					return false;
				}
			
				$file_path = "$dir_path/$file[name]"; // "" baraye name dige lazem nist chon kolan too "" hastesh
				move_uploaded_file ($file['tmp_name'], $file_path);
			   
				return $file_path;
			}
		 if( isset( $_FILES['myfile']) ) {
			$img = upload_img('./uploud',300);
			
			if($img) echo "<div class='text w24'>Path : $img</div><div class='imagha w12'><img src='$img' width='470' /></div>";
		}
      ?>
	</div >
   
</div>
</body>
</html>
