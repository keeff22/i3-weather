# i3-weather
install `php` to run.
edit `run.php` to change your API key, location and other options.
get your api key from [OpenWeatherMap.org](https://home.openweathermap.org/users/sign_up)
you may also need to install `fontawesome-webfont.ttf` to your fonts folder in order to display the icons properly.

|functions|parameters|
|:---:|:---:|
|degrees(unit,data,spacer)|display degrees in selected unit / unit: 0-K 1-°C 2-°F, data: array, spacer: bool |
|icon(data,icons,spacer)|display weather type icon / data: array, icons: array, spacer: bool |
|description(data,short,spacer)|description of weather type / data: array, short: bool, spacer: bool|

edit your `i3blocks.conf` file and add the following:
```
[weather]
command=php path/to/run.php
interval=300
```
### screenshots
![screenshot 1](https://i.imgur.com/dKSqBco.png)
![screenshot 2](https://i.imgur.com/dC54zNn.png)
