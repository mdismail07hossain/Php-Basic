<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Banner</title>
    <style>
        .banner {
            width: 100%;
            height: 400px;
            background: linear-gradient(to right, #4e73df, #1f2d3b); /* gradient background */
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
            box-sizing: border-box;
            text-align: left;
        }
        .banner h1 {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
        }
        .banner p {
            font-size: 18px;
            margin-top: 10px;
        }
        .cta-button {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cta-button:hover {
            background-color: #218838;
        }
        .banner img {
            max-height: 100%;
            max-width: 250px;
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <div class="banner">
        <div>
            <h1>Welcome to [Your Company Name]</h1>
            <p>Providing quality services for over 10 years.</p>
            <button class="cta-button">Explore Now</button>
        </div>
        <img src="J.JPG" alt="Company Image">
    </div>

</body>
</html>
