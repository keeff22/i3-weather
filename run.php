<?php
	// i3-weather for i3blocks by Benjamin Zilberman
	// Github @keeff22
	require "i3weather.php";
	// dotfile
	require "~/.i3weather.php";

	$data = json_decode(file_get_contents($apiurl), true);
	$i3weather = new I3Weather();
	// actually print everything
	echo 	$i3weather->description($data, false, true) .
				$i3weather->icon($data, $icons, true) .
				$i3weather->degrees($unit, $data);
