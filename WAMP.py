import os
import subprocess
import ctypes
import time

# 📌 Detectar la carpeta raíz de WAMP de manera correcta
SCRIPT_DIR = os.path.dirname(os.path.abspath(__file__))

# Buscar "WAMP" en la ruta completa
if "WAMP" in SCRIPT_DIR:
    WAMP_ROOT = SCRIPT_DIR.split("WAMP")[0] + "WAMP"
else:
    WAMP_ROOT = SCRIPT_DIR  # Si no lo encuentra, usar la ruta actual

print(f"[✔] WAMP detectado en: {WAMP_ROOT}")

# exit()

# Configuración de rutas
APACHE_BIN = os.path.join(WAMP_ROOT, "Apache", "bin", "httpd.exe")
MYSQL_BIN = os.path.join(WAMP_ROOT, "MariaDB", "bin", "mariadbd.exe")
CONFIG_SCRIPT = os.path.join(WAMP_ROOT, "configurar_wamp.py")

# Función para verificar si el script tiene permisos de administrador
def is_admin():
    return ctypes.windll.shell32.IsUserAnAdmin() != 0

# Función para ejecutar comandos
def run_command(command, show_output=True):
    process = subprocess.Popen(command, shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
    if show_output:
        for line in process.stdout:
            print(line.decode(), end="")
    process.wait()

# Función para iniciar Apache
def start_apache():
    print("[🚀] Iniciando Apache en segundo plano...")
    si = subprocess.STARTUPINFO()
    si.dwFlags |= subprocess.STARTF_USESHOWWINDOW  # Minimizar ventana
    subprocess.Popen(APACHE_BIN, startupinfo=si, creationflags=subprocess.CREATE_NO_WINDOW)  # Ejecutar sin bloquear

# Función para iniciar MariaDB
def start_mariadb():
    print("[🚀] Iniciando MariaDB en segundo plano...")
    si = subprocess.STARTUPINFO()
    si.dwFlags |= subprocess.STARTF_USESHOWWINDOW  # Minimizar ventana
    subprocess.Popen(MYSQL_BIN, startupinfo=si, creationflags=subprocess.CREATE_NO_WINDOW)

# Función para detener Apache
def stop_apache():
    print("[🛑] Deteniendo Apache...")
    run_command("taskkill /F /IM httpd.exe", show_output=False)

# Función para detener MariaDB
def stop_mariadb():
    print("[🛑] Deteniendo MariaDB...")
    run_command("taskkill /F /IM mariadbd.exe", show_output=False)

# Función para abrir el archivo hosts con permisos de administrador
def open_hosts():
    if not is_admin():
        print("[⚠] Se requieren permisos de administrador para editar el archivo hosts.")
        subprocess.run(["powershell", "-Command", "Start-Process notepad -Verb RunAs"])
        return
    
    hosts_path = "C:\\Windows\\System32\\drivers\\etc\\hosts"
    notepad_path = "C:\\Program Files\\Notepad++\\notepad++.exe"

    if os.path.exists(notepad_path):
        print("[📝] Abriendo hosts con Notepad++...")
        subprocess.run([notepad_path, hosts_path])
    else:
        print("[📝] Abriendo hosts con Bloc de notas...")
        subprocess.run(["notepad", hosts_path])

# Función para configurar WAMP
def configure_wamp():
    if os.path.exists(CONFIG_SCRIPT):
        print("[⚙] Ejecutando script de configuración de WAMP...")
        run_command(f'python "{CONFIG_SCRIPT}"')
    else:
        print("[❌] El script de configuración no existe.")

# Menú principal
def main():
    while True:
        print("\n==============================")
        print("    WAMP CONTROL MANAGER")
        print("==============================")
        print("1️⃣  Iniciar Apache + MariaDB")
        print("2️⃣  Iniciar Apache")
        print("3️⃣  Iniciar MariaDB")
        print("4️⃣  Reiniciar Apache")
        print("5️⃣  Detener Apache")
        print("6️⃣  Detener MariaDB")
        print("7️⃣  Detener Todo")
        print("0️⃣  Configurar WAMP")
        print("🔴  Salir")
        print("==============================")
        
        option = input("Elige una opción: ")

        if option == "1":
            start_apache()
            time.sleep(2)  # Esperar 2 segundos antes de iniciar MariaDB
            start_mariadb()
        elif option == "2":
            start_apache()
        elif option == "3":
            start_mariadb()
        elif option == "4":
            stop_apache()
            time.sleep(2)  # Esperar para evitar conflictos
            start_apache()
        elif option == "5":
            stop_apache()
        elif option == "6":
            stop_mariadb()
        elif option == "7":
            stop_apache()
            stop_mariadb()
        elif option == "0":
            configure_wamp()
        elif option.lower() == "salir":
            print("[👋] Saliendo...")
            break
        else:
            print("[❌] Opción inválida. Intenta de nuevo.")

# Ejecutar solo si el script se llama directamente
if __name__ == "__main__":
    main()
