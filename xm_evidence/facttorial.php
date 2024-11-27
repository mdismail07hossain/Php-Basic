<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
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
    <form action="#" method="post">  
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
    
</body>  
</html>  