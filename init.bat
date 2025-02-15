@echo off
setlocal enabledelayedexpansion

:: 1️⃣ Detectar la carpeta raíz de WAMP dinámicamente
set "WAMP_ROOT=%~dp0"
if "%WAMP_ROOT:~-1%"=="\" set "WAMP_ROOT=%WAMP_ROOT:~0,-1%"

:: 2️⃣ Definir rutas de los archivos de configuración
set "HTTPD_CONF=%WAMP_ROOT%\Apache\conf\httpd.conf"
set "PHP_INI=%WAMP_ROOT%\PHP\php.ini"

:: 3️⃣ Modificar httpd.conf línea por línea
if exist "%HTTPD_CONF%" (
    echo Modificando httpd.conf...
    
    powershell -Command "(Get-Content '%HTTPD_CONF%') | ForEach-Object {
        $_ -replace 'Define SRVROOT\s+\".*?\"', 'Define SRVROOT \"%WAMP_ROOT%\Apache\"'
    } | Set-Content '%HTTPD_CONF%'"

    powershell -Command "(Get-Content '%HTTPD_CONF%') | ForEach-Object {
        $_ -replace 'DocumentRoot\s+\".*?\"', 'DocumentRoot \"%WAMP_ROOT%\www\"'
    } | Set-Content '%HTTPD_CONF%'"

    powershell -Command "(Get-Content '%HTTPD_CONF%') | ForEach-Object {
        $_ -replace '<Directory\s+\".*?\">', '<Directory \"%WAMP_ROOT%\www\">'
    } | Set-Content '%HTTPD_CONF%'"

    echo httpd.conf actualizado.
) else (
    echo [ERROR] No se encontró httpd.conf en %HTTPD_CONF%
)

:: 4️⃣ Modificar php.ini línea por línea
if exist "%PHP_INI%" (
    echo Modificando php.ini...

    powershell -Command "(Get-Content '%PHP_INI%') | ForEach-Object {
        $_ -replace 'upload_max_filesize\s*=\s*\d+M', 'upload_max_filesize = 128M'
    } | Set-Content '%PHP_INI%'"

    powershell -Command "(Get-Content '%PHP_INI%') | ForEach-Object {
        $_ -replace 'post_max_size\s*=\s*\d+M', 'post_max_size = 128M'
    } | Set-Content '%PHP_INI%'"

    echo php.ini actualizado.
) else (
    echo [ERROR] No se encontró php.ini en %PHP_INI%
)

:: 5️⃣ Confirmar cambios
echo ==============================
echo  CONFIGURACIONES ACTUALIZADAS
echo ==============================
echo Nueva SRVROOT en httpd.conf: "%WAMP_ROOT%\Apache"
echo Nuevo DocumentRoot en httpd.conf: "%WAMP_ROOT%\www"
echo Configuración de PHP actualizada (upload_max_filesize y post_max_size)
echo ==============================
pause
