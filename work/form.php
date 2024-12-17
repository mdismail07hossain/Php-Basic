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
            $msg1 = "<div class='msg'>Image is too large. Your image must be a maximum of 100 KB.</div>";
        }
        if (!in_array($fileType, ["jpg","png","jpeg","gif"])) {
            $msg2 = "<div class='msg'>Also Sorry, only jpg, png, jpeg, or gif formats are allowed!</div>";
        }
    } else {
        move_uploaded_file($temp, $imgLocaton . $fileName);
        echo "<div style='color:green;font-weight: 600;'>Uploaded Successfuly</div>";
    }


}


?>


<!DOCTYPE html>
<html>
   
<style>
    body{
        background-color: gray;
    }
    form{
        margin: 0 auto;
        width: 300px;
        padding: 30px 40px ;
        border-radius: 20px;
        background-color: white;
        color: black;
        font-weight: 600;
        font-size: 22px;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 15px;
       
    }
     .msg {
        text-align: left;
        font-size: 18px;
        font-weight: 600;
        color: red;
        margin-bottom: 10px;
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
    /* design part css end  */
</style>
<body>

    <form  action="" method="post" enctype="multipart/form-data" style="margin-top:15px;">
        Select image to upload:
        <br><br>
        <input type="file" name="fileToUpload" id="fileToUpload">
           <?php
    echo isset($msg1) ? $msg1 : '';
    echo "<br>";
    echo isset($msg2) ? $msg2 : '';
    ?>
    <br>
        <input type="submit" value="Upload Image" name="submit" id="upload"><br>
      
        <button name="button" ><a href="logout.php">LogOut</a></button>
    </form>
    <section>
    <form class="form" action="#" method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input id="num" type="submit" name="submit" value="Submit" />  
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "<h3 style='text-align: center;'>Factorial of $number:</h3>
        ";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo "<h3 style='text-align: center;'> $fact . </h3>";  
    }  
?> 
</form> 
</section> 
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
<!-- html part end  -->