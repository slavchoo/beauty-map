# BEAUTY MAP

Run server: `python -m SimpleHTTPServer`

Vai php 5.4 `php -S localhost:8000 -t web web/dev_index.php`

Windows: `C:\Python27\python.exe -m SimpleHTTPServer`

Heroku URL: https://peaceful-sands-4556.herokuapp.com/

Run Karma: `karma start karma.conf.js`

Run PHPUnit tests: `cd src && ../vendor/phpunit/phpunit/phpunit tests/Portfolio/Tests/HomePageTest.php`


## add to heroku

```
heroku create
heroku config:add BUILDPACK_URL=https://github.com/ddollar/heroku-buildpack-multi.git
git push heroku master
````
