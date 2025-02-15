@echo off
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo Solicitando privilegios de Administrador...
    powershell -Command "Start-Process '%~f0' -Verb RunAs"
    exit
)

set "npp_path=C:\Program Files\Notepad++\notepad++.exe"

if exist "%npp_path%" (
    echo Abriendo con Notepad++...
    "%npp_path%" "C:\Windows\System32\drivers\etc\hosts"
) else (
    echo Abriendo con Bloc de notas...
    notepad "C:\Windows\System32\drivers\etc\hosts"
)
