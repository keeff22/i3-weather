<?php
	// i3-weather for i3blocks by Benjamin Zilberman
	// Github @keeff22
	require "i3weather.php";
	
	// create an OpenWeatherMap account for API key here: https://home.openweathermap.org/users/sign_up
	$apikey = ""; // API key
	
	$location = "New+York"; // Your+Location
	$unit = 1; // 0-K | 1-°C | 2-°F

	$icons = [
		"01d" => "☀", "01n" => "☀",	// clear sky, day/night
		"02d" => "🌤", "02n" => "🌤", // few clouds, day/night
		"03d" => "☁", "03n" => "☁", // scattered clouds, day/night
		"04d" => "☁", "04n" => "☁", // broken clouds, day/night
		"09d" => "☂", "09n" => "☂", // shower rain, day/night
		"10d" => "🌧", "10n" => "🌧", // rain, day/night
		"11d" => "🌩", "11n" => "🌩", // thunderstorm, day/night
		"13d" => "🌨", "13n" => "🌨", // snow, day/night
		"50d" => "🌫", "50n" => "🌫", // mist, day/night
	];

	$apiurl = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . "&APPID=" . $apikey;
	$data = json_decode(file_get_contents($apiurl), true);
	
	$i3weather = new I3Weather();
	
	// actually print everything
	echo $i3weather->description($data, false, true) . $i3weather->icon($data, $icons, true) . $i3weather->degrees($unit, $data);
