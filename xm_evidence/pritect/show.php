 <?php
    if(isset($_POST["btn"])){
        $fact = 1;
         echo "<div style='margin: 40px 40%;
        background-color: wheat;
        text-align: center;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;
        padding: 5px;'>This code how to find Factorial  </div>";
        $number = $_POST["fact_num"];
        for($i=2;$i<=$number;$i++){
            $fact = $fact * $i;
           
        }
         echo "<div style='margin: 40px 40%;
        color: blueviolet;
        font-size: 26px;
        font-weight: 600;'>$number Factorial is $fact</div>";
        ;
        
    }
    ?>