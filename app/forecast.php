<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/38.0834,-122.7633/?exclude=minutely?exclude=hourly?';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

//Feels like 

 $temp= $forecast['currently']['temperature'];

if($temp < 50){
	$feels = 'It\'s cold outside.';
}else{
	$feels = 'It\'s nice outside';
}