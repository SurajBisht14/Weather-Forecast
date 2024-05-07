<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Whirl</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="newNav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <?php session_start(); ?>
    <?php include 'newNav.php'; ?>

    <div class="Maincontainer">
        <div class="container1">
            <b>
            Welcome to Weather Whirl, your go-to destination for accurate and up-to-date weather information. Our
            site provides real-time weather updates, ensuring you are always prepared for the day ahead. Whether you are
            planning a weekend getaway or simply preparing for your daily commute, we've got you covered. With our
            user-friendly interface, you can easily access weather forecasts for any location. Stay informed, stay ahead
            with Weather Whirl.
            </b>
        </div>
        <div class="container2"></div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="home.js"></script>
    <script src="newNav.js"></script>
</body>

</html>