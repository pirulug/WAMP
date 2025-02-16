@echo off
setlocal enabledelayedexpansion

:: Detectar la carpeta raíz de WAMP dinámicamente
set "WAMP_ROOT=%~dp0"
if "%WAMP_ROOT:~-1%"=="\" set "WAMP_ROOT=%WAMP_ROOT:~0,-1%"

:: Definir rutas de configuración
set "HTTPD_CONF=%WAMP_ROOT%\Apache\conf\httpd.conf"
set "HTTPD_VHOST_CONF=%WAMP_ROOT%\Apache\conf\extra\httpd-vhosts.conf"
set "PHP_INI=%WAMP_ROOT%\PHP\php.ini"
set "MY_INI=%WAMP_ROOT%\MariaDB\my.ini"

:: Modificar httpd.conf
if exist "%HTTPD_CONF%" (
    echo Modificando httpd.conf...

    powershell -Command "(Get-Content '%HTTPD_CONF%') -replace 'Define SRVROOT\s+\".*?\"', 'Define SRVROOT \"%WAMP_ROOT%\Apache\"' | `
                         -replace 'DocumentRoot\s+\".*?\"', 'DocumentRoot \"%WAMP_ROOT%\www\"' | `
                         -replace '<Directory\s+\".*?\">', '<Directory \"%WAMP_ROOT%\www\">' | `
                         -replace 'Alias /phpmyadmin\s+\".*?\"', 'Alias /phpmyadmin \"%WAMP_ROOT%\phpMyAdmin\"' | `
                         -replace '<Directory\s+\".*?\">', '<Directory \"%WAMP_ROOT%\phpMyAdmin\">' | `
                         -replace 'LoadFile\s+.*?php8ts.dll', 'LoadFile \"%WAMP_ROOT%\PHP\php8ts.dll\"' | `
                         -replace 'LoadFile\s+.*?libpq.dll', 'LoadFile \"%WAMP_ROOT%\PHP\libpq.dll\"' | `
                         -replace 'LoadModule php_module\s+\".*?\"', 'LoadModule php_module \"%WAMP_ROOT%\PHP\php8apache2_4.dll\"' | `
                         -replace 'PHPIniDir\s+\".*?\"', 'PHPIniDir \"%WAMP_ROOT%\PHP\"' | `
                         Set-Content '%HTTPD_CONF%'"
    
    echo httpd.conf actualizado.
) else (
    echo [ERROR] No se encontró httpd.conf en %HTTPD_CONF%
)

:: Modificar httpd-vhosts.conf
if exist "%HTTPD_VHOST_CONF%" (
    echo Modificando httpd-vhosts.conf...

    powershell -Command "(Get-Content '%HTTPD_VHOST_CONF%') -replace 'Include\s+\".*?\"', 'Include \"%WAMP_ROOT%\vhosts\*.conf\"' | `
                         Set-Content '%HTTPD_VHOST_CONF%'"

    echo httpd-vhosts.conf actualizado.
) else (
    echo [ERROR] No se encontró httpd-vhosts.conf en %HTTPD_VHOST_CONF%
)

:: Modificar php.ini
if exist "%PHP_INI%" (
    echo Modificando php.ini...

    powershell -Command "(Get-Content '%PHP_INI%') -replace 'extension_dir\s*=\s*\".*?\"', 'extension_dir = \"%WAMP_ROOT%\PHP\ext\"' | `
                         -replace 'upload_max_filesize\s*=\s*\d+M', 'upload_max_filesize = 128M' | `
                         -replace 'post_max_size\s*=\s*\d+M', 'post_max_size = 128M' | `
                         Set-Content '%PHP_INI%'"

    echo php.ini actualizado.
) else (
    echo [ERROR] No se encontró php.ini en %PHP_INI%
)

:: Modificar my.ini de MariaDB
if exist "%MY_INI%" (
    echo Modificando my.ini...

    powershell -Command "(Get-Content '%MY_INI%') -replace 'datadir\s*=\s*.*?', 'datadir=%WAMP_ROOT%\MariaDB\data' | `
                         -replace 'plugin-dir\s*=\s*.*?', 'plugin-dir=%WAMP_ROOT%\MariaDB\lib\plugin' | `
                         Set-Content '%MY_INI%'"

    echo my.ini actualizado.
) else (
    echo [ERROR] No se encontró my.ini en %MY_INI%
)

:: Confirmar cambios
echo ==============================
echo  CONFIGURACIONES ACTUALIZADAS
echo ==============================
echo Nueva SRVROOT en httpd.conf: "%WAMP_ROOT%\Apache"
echo Nuevo DocumentRoot en httpd.conf: "%WAMP_ROOT%\www"
echo Nueva ubicación de phpMyAdmin en httpd.conf: "%WAMP_ROOT%\phpMyAdmin"
echo Carga de módulos PHP actualizada
echo Nuevo include en httpd-vhosts.conf: "%WAMP_ROOT%\vhosts\*.conf"
echo Configuración de PHP actualizada (upload_max_filesize, post_max_size)
echo Nueva configuración en my.ini (datadir y plugin-dir)
echo ==============================
pause
