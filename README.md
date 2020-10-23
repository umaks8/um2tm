# um2tm
Тестовая инфраструктура из 3 сервисов для TM:
+ nginx 
+ php-fpm
+ kannel

## Конфигурация для тестового SMPP-сервера

По умолчанию настроен на временные логин-пароль от https://melroselabs.com/services/smsc-simulator/.
Для изменения необходимо внести параметры:
> smsc-username= из System ID

> smsc-password= из Password

> username= из System ID

> password= из Password

в файл
_./conf/kannel/conf/melrose_smsc.conf_

## Запуск

```bash
$ docker-compose up --build
```
После чего будет видна консоль, куда по условиям задания будут выводиться переданные параметры по двум роутам:
_/incoming_ и _/delivery_

## Отправка сообщения

Доступна либо из консоли хоста (nginx привязан к порту хоста 8088):
```bash
$ curl 'http://host:8088/send?username=System ID&password=Password&from=99System ID&to=99123456&text=Hello!!!&dlr-mask=31
```
либо из строки браузера.

## Страница статуса kannel

Доступна по адресу:
```
http://host:8088/status/?username=admin&password=password
```

## Логи
Логи _nginx_ и _kannel_  персистентно пишутся в файлы на хосте:

_./logs/nginx/_

_./logs/kannel/_



