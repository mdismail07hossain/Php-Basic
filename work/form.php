<?php
session_start();
if(!isset($_SESSION['ismail'])){
    header("location:login.php");
}

?>





<?php

if (isset($_POST["submit"])) {
    $fileName = $_FILES["fileToUpload"]["name"];
    $temp = $_FILES["fileToUpload"]["tmp_name"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $imgLocaton = "uploads/";
    $file_size = $_FILES["fileToUpload"]["size"];
    $kb = $file_size / 1024;

    if (($kb > 100) || !in_array($fileType, ["jpg","png","jpeg","gif"])) {
        if ($kb > 100) {
            $msg1 = "Image is too large. Your image must be a maximum of 100 KB.";
        }
        if (!in_array($fileType, ["jpg","png","jpeg","gif"])) {
            $msg2 = "Also Sorry, only jpg, png, jpeg, or gif formats are allowed!";
        }
    } else {
        move_uploaded_file($temp, $imgLocaton . $fileName);
        echo "Successfully Uploaded!";
    }


}


?>


<!DOCTYPE html>
<html>
<style>
    form{
        margin: 0 auto;
        width: 300px;
        padding: 30px 40px ;
        border-radius: 20px;
        background-color: gray;
        color: white;
        font-weight: 600;
        font-size: 22px;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 15px;
       
    }
    button {
        background:linear-gradient(to left,red,orange) ;
        padding: 7px 12px;
        border-radius: 5px;
        border: none;
        outline: none;
        margin-top: 10px;
        margin-left: 400px;
        margin-top: -100px;
        box-shadow: rgba(0, 0, 0, 0.70)5px 10px 15px;
        
        
    }
    button a{
        text-decoration: none;
        color: white;
        font-size: 16px;
        font-weight: 600;
        
    }
    .php_img{
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 15px;
       
       
    }
    .php_img img{
        height: 300px;
        width: 300px;
        border-radius: 50%;
        box-shadow: rgba(0, 0, 0, 0.70)5px 10px 15px;
        transition: .5s;
        
    }
    .php_img img:hover{
        /* position: absolute; */
        transform: translateY(50px);
        transition: .5s;

    }
    #upload{
       background:linear-gradient(to left,blue,skyblue) ;
        padding: 7px 12px;
        border-radius: 5px;
        border: none;
        outline: none;
        margin-top: 10px;
        color: white;
        font-weight:600 ;
        box-shadow: rgba(0, 0, 0, 0.70)5px 10px 15px;
         cursor: pointer;
        /* margin-left: 200px;  */
    }
</style>
<body>
    <?php
    echo isset($msg1) ? $msg1 : '';
    echo "<br>";
    echo isset($msg2) ? $msg2 : '';
    ?>
    <form action="" method="post" enctype="multipart/form-data" style="margin-top:15px;">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit" id="upload"><br>
        <button name="button" ><a href="logout.php">LogOut</a></button>
    </form>
    <section class="php_img">
<?php
// Display all uploaded images from the "uploads" directory
$imgLocation = "uploads/";
$images = glob($imgLocation . "*.{jpg,png,jpeg,gif,JPG,PNG,JPEG,GIF}", GLOB_BRACE);

if (count($images) > 0) {
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="Uploaded Image" >';
    }
} else {
    echo "No images uploaded yet.";
}
?>
    </section>

</body>

</html>
