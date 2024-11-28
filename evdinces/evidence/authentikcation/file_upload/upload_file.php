<?php
if(isset($_POST["btnsubmit"])){
    $file=$_FILES["myfile"] ["name"];
    $size=$_FILES["myfile"]["size"] ;
    
    // var_dump($file);
    $filetamp=$_FILES["myfile"]["tmp_name"];
    $kb=100*1024;
    if($size>$kb){
        $folder="uploads/";
        echo "Upload a mixmuma 100KB file";
    }else{
        $folder="uploads/";
        echo "file Upload seccus fully";
        move_uploaded_file("$filetamp","$folder.$file",);
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filr_upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    Input_a_File: <br>    
    <input type="file" name="myfile"><br><br>
        <input type="submit" name="btnsubmit">
    </form>

  
</body>
</html>

<?php 
 $folder="uploads/";
 $images=glob($folder);
if(count($imgaes)>0){
    foreach($imgaes as $img){
        echo "<img src='.$img .'alt='Upload image'>";
    }
}else{
        echo "no image here!";
    }
?>