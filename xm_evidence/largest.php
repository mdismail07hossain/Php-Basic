<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maxnumber</title>
</head>
<style>
      #num {
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
        display:block;
        margin-bottom:10px ;
        border-radius: 5px;
    }
    section{
        margin: 0 auto;
        width: 300px;
    }
    form{
        background-color:grey;
        padding: 30px 40px;
        color:white;
        border:none;
        border-radius: 5px;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;
    }
</style>
<body>
    <section>
        <form method="post">
            Number1: <br> 
            <input type="number" name="num1" id="num1"  >
            Number2: <br> 
            <input type="number" name="num2" id="num2" >
            Number3: <br> 
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
            echo "<h3>$num1 , $num2 , $num3 The maximum number is: $maxNumber</h3>";
        }
   }
    ?>
        </form>
    </section>
  
</body>
</html>