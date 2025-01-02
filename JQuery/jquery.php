<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Test try</title>
    <link rel="stylesheet" href="style.css">
    <!-- jQuery CDN (from Google) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

</head>
<body>
   <section>
    <div>
         <div class="one"></div>
         <div class="one1"></div>
    </div>
    <div>
         <div class="one2"></div>
         <div class="one3"></div>
    </div>
   </section>
    <section>
          <div>
            <button class="button1"  onclick="animi()">Start Animation</button>
            <button class="button2" onclick="animaout()">Go Back</button>
   </div>
    <div>
            <button class="button1"  onclick="animi1()">Start Animation</button>
            <button class="button2" onclick="animaout1()">Go Back</button>
    </div>
    </section>
    <script src="./js/jry.js"></script>
    <script>
        function animi(){
            $('.one').hide(5000);
            $('.one1').hide(5000);
        }
        function animaout(){
            $('.one').show(5000);
            $('.one1').show(5000);
        }
        function animi1(){
            $('.one2').hide(5000);
            $('.one3').hide(5000);
        }
        function animaout1(){
            $('.one2').show(5000);
            $('.one3').show(5000);
        }
    </script>
</body>
</html>