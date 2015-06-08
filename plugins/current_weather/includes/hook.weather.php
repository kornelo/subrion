<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2015 Intelliants, LLC <http://www.intelliants.com>
 *
 * This file is part of Subrion.
 *
 * Subrion is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Subrion is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Subrion. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @link http://www.subrion.org/
 *
 ******************************************************************************/

if (iaView::REQUEST_HTML == $iaView->getRequestType() && $iaView->blockExists('current_weather'))
{
	$city = urlencode($iaCore->get('current_weather_city'));
	$units = array('Celsius' => 'metric', 'Fahrenheit' => 'imperial');
	$unitParam = $units[$iaCore->get('current_weather_unit')];

	$degrees = array('Celsius' => 'C', 'Fahrenheit' => 'F');
	$degreesParam = $degrees[$iaCore->get('current_weather_unit')];
	$weatherData = iaUtil::jsonDecode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$city}&mode=json&units={$unitParam}"));
	if ($weatherData)
	{
		$images = array(
			'Mist' => 'img/mist.png',
			'Snow' => 'img/snow.png',
			'Thunderstorm' => 'img/thunderstorm.png',
			'Rain' => 'img/rain.png',
			'Shower rain' => 'img/shower_rain.png',
			'Broken clouds' => 'img/clouds.png',
			'Clouds' => 'img/clouds.png',
			'Scattered clouds' => 'img/clouds.png',
			'Few clouds' => 'img/cloudy_day.png',
			'Clear sky' => 'img/clear_sky.png',
			'Clear' => 'img/clear_sky.png');

		$weatherIcon = str_replace('img/', 'img/' . $iaCore->get('current_weather_scheme') . '/', $images[$weatherData['weather'][0]['main']]);
		$iaView->assign('icon', $weatherIcon);

		$weatherTemp = ($iaCore->get('current_weather_round')) ? round($weatherData['main']['temp']) : $weatherData['main']['temp'];
		$iaView->assign('weather_temp', $weatherTemp);

		$iaView->add_css('_IA_URL_plugins/current_weather/templates/front/css/style');
	}

	$iaView->assign('degrees', $degreesParam);
	$iaView->assign('weather_data', $weatherData);
}