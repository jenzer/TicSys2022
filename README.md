# TicSys
Schulprojekt für das Fach Web-Engineering an der ABB Technikerschule

## Apache vhost Beispiel-Konfiguration

    <VirtualHost *:80>
        ServerName localhost
        DocumentRoot "C:/xampp/htdocs"
    </VirtualHost>
    
    <VirtualHost *:80>
        ServerAdmin marc.jenzer@doz.abbts.ch
        DocumentRoot "C:/Data/repos/ticsys-continuous"
        ServerName ticsys.local
        ServerAlias www.ticsys.local
        ErrorLog "logs/ticsys.local-error.log"
        CustomLog "logs/ticsys.local-access.log" common
        <Directory "C:/Data/repos/ticsys-continuous">
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>