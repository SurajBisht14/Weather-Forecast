<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Whirl</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="newNav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <?php session_start(); ?>
    <?php include 'newNav.php'; ?>
   <div class="main-parent">
        <div class="child-div">
            <h1>About Weather Whirl</h1>
            <p>Welcome to Weather Whirl, your ultimate weather forecasting companion. Our project aims to deliver accurate and timely weather updates to users worldwide. Weather data provided by <a style="color: orange;" href="https://openweathermap.org" target="_blank">OpenWeatherMap</a></p>            
            <h1>Goal</h1>
            <p>Our goal at Weather Whirl is to provide comprehensive and reliable weather information that empowers users to make informed decisions about their day-to-day activities.</p>
            
            <h1>Features</h1>
            <ul>
                <li>Real-time temperature updates</li>
                <li>Hourly and daily weather forecasts</li>
                <li>Humidity and wind speed information</li>
            </ul>
            
            <h1>Inspiration</h1>
            <p>Weather Whirl was born out of the necessity for a user-friendly weather forecasting service that caters to the diverse needs of individuals, whether they're planning outdoor activities, traveling, or simply staying informed about local weather conditions.</p>
            
            <h1>Feedback</h1>
            <p>We value your feedback! Your suggestions, comments, and questions are essential for improving Weather Whirl and enhancing the user experience. Please don't hesitate to reach out to us with your thoughts.</p>

             <h1>How It Works</h1>
            <p>Weather Whirl utilizes OpenWeatherMap's API to fetch weather data based on user location. The data is then processed and displayed in an easy-to-understand format on our website.</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="newNav.js"></script>
</body>
</html>