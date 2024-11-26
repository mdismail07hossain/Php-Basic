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
        margin: 40px 40%;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;
    }
    .outpu{
        margin: 40px 40%;
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
            <label for="nuber">Enter NUmber:</label>
            <input type="number" name="fact_num">
            <input id="btu" type="submit" value="Submit" name="btn">
        </div>
    </form>

    <?php
    if(isset($_POST["btn"])){
        $fact = 1;
         echo "<div class='outpu'>This code how to find Factorial  </div>";
        $number = $_POST["fact_num"];
        for($i=2;$i<=$number;$i++){
            $fact = $fact * $i;
           
        }
         echo "<div class='output'>$number Factorial is $fact</div>";
        ;
        
    }
    ?>
</body>
</html>