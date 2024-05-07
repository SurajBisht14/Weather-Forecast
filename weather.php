<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Whirl</title>
    <link rel="stylesheet" href="weather.css">
    <link rel="stylesheet" href="newNav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <?php session_start(); ?>
    <?php include 'newNav.php'; ?>
    <div class="MainContainer">
        <div class="childContainer">

            <div class="inputContainer">
                <input type="text" placeholder="Enter location" class="text" value="">
                <button class="submit">Search</button>
            </div>
        <div class="subContainer">
            <div class="subContainer1">

                 <h1 class="country">Humidity : <b style="color: white;">0%</b></h1>
                 <h1 class="city">Place:Pune</h1>
                 <h1 class="tempDeg1"><span>Temperature:30<sup>o</sup>C</span></h1>
                 <h1 class="tempDeg2"><span>Temp feels like:30<sup>o</sup>C</span></h1>
                 <h1 class="windSpeed">Speed:<b style="color:white;">15/hr</b></h1>
                 <h1 class="weatherCondition">Weather Condition:Rainy</h1>
                 <span id="temp_status"><i class="fa-solid fa-cloud-sun-rain"></i></span>
                 
            </div>
            <div class="subContainer2">
                    <h1>
                        Search any city or state
                    </h1>
                    <img src="gif.gif" alt="Clout Image" class="pngImg">
            </div>
        </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="weather.js"></script>
    <script src="newNav.js"></script>
</body>
</html>