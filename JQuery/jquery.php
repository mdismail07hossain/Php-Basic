<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Test</title>
    <link rel="stylesheet" href="style.css">
    <!-- jQuery CDN (from Google) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="one" style="width: 100px; height: 100px; background-color: red; margin: 10px;"></div>
    <div class="one" style="width: 100px; height: 100px; background-color: blue; margin: 10px;"></div>
    <button onclick="animi()">Start Animation</button>

    <script>
        function animi(){
            // Hide all elements with the class 'one' with a 5 second duration
            $('.one').hide(5000);
        }
    </script>
</body>
</html>
