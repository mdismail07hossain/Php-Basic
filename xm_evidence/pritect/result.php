  <?php
    if(isset($_POST["btn"])){
        $fact = 1;
         echo "<div style='margin: 40px 40%;
        background-color: wheat;
        text-align: center;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;
        padding: 5px;'>This code how to find Leargest Number  </div>";
        $num1= $_POST["fact_num1"];
        $num2= $_POST["fact_num2"];
        $num3= $_POST["fact_num3"];
        $maxNumber = max($num1, $num2, $num3);
         echo "<div style='margin: 40px 40%;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;'>$num1, $num2 and $num3 The Largest Number is $maxNumber</div>";
        ;
        
    }
    ?>