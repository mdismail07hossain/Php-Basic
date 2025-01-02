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
    <div class="one"></div>
    <div class="one"></div>
    <button class="button1"  onclick="animi()">Start Animation</button>
    <button class="button2" onclick="animaout()">Go Back</button>
    <script src="./js/jry.js"></script>
    <script>
        function animi(){
            $('.one').hide(5000);
        }
        function animaout(){
            $('.one').show(5000);
        }
    </script>
</body>
</html>