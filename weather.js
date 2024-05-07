
                                    //getting current location using navigator object of js

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
} else {
    console.log("Geolocation is not supported by this browser.");
}

                                //if successfully get coordingtes passing the url to fetchWeatherData()
function successCallback(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    console.log(position);
    let currentLocationUrl=`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=43145dc1a269718582bb0f42777bc908`;
    fetchWeatherData(currentLocationUrl);
}
function errorCallback(error) {
    console.log("Error getting geolocation: " + error.message);
}

                            //fetching the url and passing data to finalWeatherData() 
async function fetchWeatherData(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Some Error occured');
        }
        let data = await response.json();
        data = Array(data);
        finalWeatherData(data);

    } catch (err) {
        console.error("Error fetching weather data:", err);
    }
}


                            //fetching an api

document.querySelector(".submit").addEventListener('click', async (e) => {

    e.preventDefault();
    let cityName = document.querySelector(".text").value;

    if (cityName === '') {
        alert("Please enter any location");
    }
    else {

        try {
            let url = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=43145dc1a269718582bb0f42777bc908`;
            let response = await fetch(url);
            if (!response.ok) {
                throw new Error('Some Error occured');
            }
            let data = await response.json();
            data = Array(data);
            
            finalWeatherData(data);
        }
        catch (err) {
            alert(`Please Enter Valid place`);
        }
    }

})

                                    //temperature in celcius functin

function tempConverter(tempKelvin) {
    return (tempKelvin - 273.15).toFixed(2);
}


                                    //wind speed in km/hr
function convertSpeedToKmh(speed_ms) {
    const conversionFactor = 3.6;
    const speed_kmh = speed_ms * conversionFactor;
    return (speed_kmh.toFixed(2));
}

function finalWeatherData(data){
    let tempInCelcius = tempConverter(data[0].main.temp);
    let tempFeelsLike= tempConverter(data[0].main.feels_like);
    let city = data[0].name;
    let tempMood=data[0].weather[0].main;
    let temp_status=document.querySelector("#temp_status");
    let speedKm=convertSpeedToKmh(data[0].wind.speed);
    document.querySelector('.windSpeed').innerHTML=`Speed : <b style="color:black;">${speedKm}km/hr</b>`;
    document.querySelector(".tempDeg1").innerHTML = `<span>Temperature : <b style="color:black;">${tempInCelcius}<sup>o</sup>C</b></span>`;
    document.querySelector(".tempDeg2").innerHTML = `<span>Temp Feels like : <b style="color:black;">${tempFeelsLike}<sup>o</sup>C</b></span>`;
    document.querySelector(".city").innerHTML = `Place : <b style="color:black;">${city}</b>`;
    document.querySelector(".country").innerHTML = `Humidity : <b style="color:black;">${data[0].main.humidity}%</b>`;
    document.querySelector(".subContainer1").style.opacity='1';
    document.querySelector(".subContainer2").style.opacity='0';
    if (tempMood === "Clear") {
        document.querySelector('.weatherCondition').innerHTML=`Weather Condition : <b style="color:black;">${tempMood}</b>`;
        temp_status.innerHTML ="<i class='fas fa-sun' style='color: #eccc68;'></i>";

    } else if (tempMood === "Clouds") {

        temp_status.innerHTML ="<i class='fas fa-cloud' style='color: #f1f2f6;'></i>";
        document.querySelector('.weatherCondition').innerHTML=`Weather Condition : <b style="color:black;">${tempMood}</b>`;

    } else if (tempMood === "Rain") {

        temp_status.innerHTML = "<i class='fas fa-cloud-rain' style='color: #a4b0be;'></i>";
        document.querySelector('.weatherCondition').innerHTML=`Weather Condition : <b style="color:black;">${tempMood}</b>`;

    } else {

        temp_status.innerHTML = "<i class='fas fa-sun' style='color:#eccc68;'></i>";
        document.querySelector('.weatherCondition').innerHTML=`Weather Condition : <b style="color:black;">${tempMood}</b>`;

    }
}