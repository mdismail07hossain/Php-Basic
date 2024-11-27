<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest_number</title>
</head>
<style>
      #num {
        width: 100px;
        margin-left: 37%;
        padding: 7px 10px ;
        border-radius: 5px;
        outline:none;
        background-color:green;
        color:white;
        border:none;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;

    }
    input{
        padding: 7px 10px ;
        /* display:block; */
        margin-bottom:10px ;
        border-radius: 5px;
        width: 100%;
    }
    section{
        margin: 0 auto;
        width: 400px;
    }
    form{
        background-color:grey;
        padding: 30px 40px;
        color:white;
        font-weight: 600;
        border:none;
        border-radius: 5px;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;
    }
    h3{
        text-align: center;
        font-size: 26px;
        /* color: green; */
    }
     body{
        background-color: skyblue;
    }
</style>
<body>
    <section>
        <form method="post">
            <h3>This is Find Largest Number Calculator</h3>
            Enter 1st Number: <br> <br>
            <input type="number" name="num1" id="num1"  >
            Enter 2nd Number: <br> <br>
            <input type="number" name="num2" id="num2" >
            Enter 3rd Number: <br> <br>
            <input type="number" name="num3" id="num3" >
            <input id="num" type="submit" name="submit" value="submit">
          <?php
   if($_POST){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input values from the form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            // Find the maximum number using max() function
            $maxNumber = max($num1, $num2, $num3);

            // Display the result
            echo "<h3>$num1 , $num2 , $num3 The Largest number is: $maxNumber</h3>";
        }
   }
    ?>
        </form>
    </section>
  
</body>
</html>