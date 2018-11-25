@echo off
setlocal

REM PHP STOP
docker stop php-rc-apache

docker container ls
