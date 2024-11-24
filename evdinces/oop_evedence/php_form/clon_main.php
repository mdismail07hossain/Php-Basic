<?php
require('student.php');

if (isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $batch = $_POST['batch'];

    // Check if any field is empty
    if (empty($name) || empty($id) || empty($batch)) {
        echo "<script>alert('All fields are required plz!');</script>"; // Display error message
    } else {
        // Create a new student instance if all fields are filled
        $student = new Students($name, $id, $batch);
        $student->SaveData();

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post data and get data show table</title>
    <style>
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 300px;
            margin: 0  100px 0 100px;
            padding: 40px 20px;
            border-radius: 5px;
            float: left;
            background-color: #58d68d;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        #wrap{
            display: flex;
            flex-direction: column;
            row-gap: 5px;
        }

        #wrap > label{
            font-size: 18px;
            font-weight: 400;
            font-family: sans-serif;
        }
        #wrap > input{
            margin-bottom: 15px;
            padding: 8px 12px;
        }
        #btn{
            width: 100px;
            border: none;
            height: 40px;
            border-radius: 5px;
           background-color: #27ae60;
           font-size: 18px;
           font-weight: 500;
           color: #fff;
        }
       
    </style>
</head>
<body>
    <form action="" method="post">
        <div id="wrap">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div id="wrap">
            <label for="id">Id</label>
            <input type="text" name="id" id="id">
        </div>
        <div id="wrap">
            <label for="batch">Batch</label>
            <input type="text" name="batch" id="batch">
        </div>
       <div style="margin: 0 auto; margin-top: 20px">
         <button type="submit" name="submitBtn" id="btn" value="submit">Submit</button>
       </div>
    </form>
</body>
</html>

<?php
Students::Displayinfo();
?>