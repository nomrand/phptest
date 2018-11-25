@echo off
setlocal

REM PHP CONTAINER CREATE
REM Get From => [https://hub.docker.com/_/php/]
REM docker run -d -p 80:80 -v D:\mydocument\document\docker\phptest\www:/var/www/html --name php-rc-apache php:rc-apache

REM PHP START
docker start php-rc-apache

docker container ls

