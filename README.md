# application for use TPR framework

## Framework

- [github.com/AxiosCros/tpr](https://github.com/AxiosCros/tpr)

## Env

- PHP 8.1+

## How to use

### install composer library

```bash
composer install
```

### start web server

- Use php built-in web server

```bash
php -S localhost:8088 -t public/
```

- Use workerman web server

```bash
php public/workerman.php start -d

# stop
php public/workerman.php stop
```

> view in the browser : [localhost:8088/](http://localhost:8088/)

### use command tool

```shell
chmod 755 ./tpr
./tpr

# generate new command
./tpr make command_name
```
