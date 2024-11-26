<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facttorial</title>
</head>
<style>
    form{
        margin: 0 auto;
        width: 400px;
        padding: 30px 40px;
        background-color: gray;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
    }
    input{
        width: 100%;
        padding: 7px;
        margin: 10px 0;
    }
    label{
         color: white;
        font-weight: 600;
        text-transform: uppercase;
    }
    #btu{
        width: 20%;
        background: linear-gradient(to left,#2adf48,#0b6219);
        color: white;
        font-weight: 600;
        outline: none;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }
    .output{
        margin: 40px 35%;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;
    }
    .outpu{
        margin: 40px 30%;
        background-color: wheat;
        text-align: center;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;
        padding: 5px;
    }
</style>
<body>
    <form action="#" method="post">
        <div class="inputbox">
            <label for="nuber">Enter 1st NUmber:</label>
            <input type="number" name="fact_num1">
            <label for="nuber">Enter 2nd NUmber:</label>
            <input type="number" name="fact_num2">
            <label for="nuber">Enter 3rd NUmber:</label>
            <input type="number" name="fact_num3">
            <input id="btu" type="submit" value="Submit" name="btn">
        </div>
    </form>

    <?php
    if(isset($_POST["btn"])){
        $fact = 1;
         echo "<div class='outpu'>This code how to find Leargest Number  </div>";
        $num1= $_POST["fact_num1"];
        $num2= $_POST["fact_num2"];
        $num3= $_POST["fact_num3"];
        $maxNumber = max($num1, $num2, $num3);
         echo "<div class='output'>$num1, $num2 and $num3 The Largest Number is $maxNumber</div>";
        ;
        
    }
    ?>
</body>
</html>