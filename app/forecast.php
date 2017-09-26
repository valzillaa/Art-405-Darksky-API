<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/YOUR-API-KEY/34.2381,-118.5301/?exclude=minutely?exclude=hourly';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);