
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<style>
    form{
        margin: 0 auto;
        width: 400px;
        padding: 30px 40px ;
        background: linear-gradient(to left,red,orange);
        color: white;
        font-size: 22px;
        font-weight: 600;
        text-transform: capitalize;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 15px;
    }
    input{
        width: 100%;
        outline: none;
        border: 2px solid green;
    }
    h2{
        text-align: center;
    }
</style>
<body>

    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>

</body>
</html>
