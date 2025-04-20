<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Berechtigungen');
define('_MD_A_MYMENU_MYPREFERENCES','Einstellungen');

// index.php
define('_AM_TH_DATETIME', 'Zeit');
define('_AM_TH_USER', 'Benutzer');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Typ');
define('_AM_TH_DESCRIPTION', 'Beschreibung');
define('_AM_TH_BADIPS','Unerlaubte IPs<br><br><span style="font-weight:normal;">Eine IP pro Zeile eintragen<br>leer = alle IPs sind erlaubt</span>');
define('_AM_TH_GROUP1IPS','Erlaubte IPs für Gruppe=1<br><br><span style="font-weight:normal;">Eine IP pro Zeile eintragen<br>192.168. bedeutet 192.168.*<br>leer = alle IPs sind erlaubt</span>');
define('_AM_LABEL_COMPACTLOG', 'Log komprimieren');
define('_AM_BUTTON_COMPACTLOG', 'Jetzt komprimieren!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Duplikate (IP,Typ) werden entfernt');
define('_AM_LABEL_REMOVEALL', 'Alle Einträge entfernen');
define('_AM_BUTTON_REMOVEALL', 'Alle entfernen!');
define('_AM_JS_REMOVEALLCONFIRM', 'Alle Logs werden unwiderruflich gelöscht. Sicher?');
define('_AM_LABEL_REMOVE', 'Markierte Einträge löschen:');
define('_AM_BUTTON_REMOVE', 'Löschen!');
define('_AM_JS_REMOVECONFIRM', 'Löschen bestätigen?');
define('_AM_MSG_IPFILESUPDATED', 'IP-Dateien wurden aktualisiert');
define('_AM_MSG_BADIPSCANTOPEN', 'Datei für unerlaubte IPs konnte nicht geöffnet werden');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Datei für erlaubte IPs der Gruppe=1 konnte nicht geöffnet werden');
define('_AM_MSG_REMOVED', 'Einträge wurden entfernt');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Verzeichnis configs muss beschreibbar sein: %s');

// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Prefix-Verwaltung');
define('_AM_MSG_DBUPDATED', 'Datenbank erfolgreich aktualisiert!');
define('_AM_CONFIRM_DELETE', 'Alle Daten werden gelöscht. Fortfahren?');
define('_AM_TXT_HOWTOCHANGEDB',"Um das Prefix zu ändern,<br> bearbeiten Sie %s/data/secure.php manuell.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");

// advisory.php
define('_AM_ADV_NOTSECURE', 'Nicht sicher');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Wenn Sie ein Bild mit -NG- sehen oder der Link eine normale Seite zurückgibt, ist XOOPS_TRUST_PATH nicht korrekt platziert. Optimal ist ein Verzeichnis außerhalb des DocumentRoot. Wenn das nicht möglich ist, legen Sie eine .htaccess (DENY FROM ALL) direkt im XOOPS_TRUST_PATH an.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Stellen Sie sicher, dass PHP-Dateien im TRUST_PATH nur lesbar sind (sie sollten 404, 403 oder 500 Fehler erzeugen)');
define('_AM_ADV_REGISTERGLOBALS',"Wenn 'ON', sind Injektionsangriffe möglich. Stellen Sie 'register_globals' in der php.ini auf 'off', oder verwenden Sie eine .htaccess-Datei in Ihrem XOOPS-Verzeichnis:");
define('_AM_ADV_ALLOWURLFOPEN',"Wenn 'ON', können Angreifer Skripte auf entfernten Servern ausführen.<br>Nur Administratoren können diese Option ändern.<br>Bearbeiten Sie php.ini oder httpd.conf:<br><b>Beispiel für httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Oder wenden Sie sich an Ihren Administrator.");
define('_AM_ADV_USETRANSSID',"Wenn 'ON', wird die Session-ID in Links angezeigt.<br>Zum Schutz vor Session-Diebstahl in .htaccess einfügen:<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Diese Einstellung kann SQL-Injections begünstigen.<br>Aktivieren Sie 'Force sanitizing *' in den Einstellungen dieses Moduls.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Zum Prefix-Manager wechseln');
define('_AM_ADV_MAINUNPATCHED', 'Sie sollten mainfile.php gemäß README bearbeiten.');
define('_AM_ADV_DBFACTORYPATCHED', 'Ihre Datenbankfactory ist gegen SQL-Injections gesichert');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Ihre Datenbankfactory ist nicht gegen SQL-Injections gesichert. Patches sind notwendig.');
define('_AM_ADV_SUBTITLECHECK', 'Prüfen, ob Protector korrekt funktioniert');
define('_AM_ADV_CHECKCONTAMI', 'Kontamination');
define('_AM_ADV_CHECKISOCOM', 'Isolierte Kommentare');

// XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'und fügen Sie folgende Zeile ein:');

// XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefix');
define('_AM_PROTECTOR_TABLES', 'Tabellen');
define('_AM_PROTECTOR_UPDATED', 'Aktualisiert');
define('_AM_PROTECTOR_COPY', 'Kopieren');
define('_AM_PROTECTOR_ACTIONS', 'Aktionen');

// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'IPs der markierten Einträge blockieren:');
define('_AM_BUTTON_BAN_BY_IP', 'IP sperren!');
define('_AM_JS_BANCONFIRM', 'IP-Sperren wirklich durchführen?');
define('_AM_MSG_BANNEDIP', 'IP-Adressen wurden gesperrt');
define('_AM_ADMINSTATS_TITLE', 'Protector-Log-Übersicht');

// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Letzter Monat');
define('_AM_ADMINSTATS_LAST_WEEK', 'Letzte Woche');
define('_AM_ADMINSTATS_LAST_DAY', 'Letzter Tag');
define('_AM_ADMINSTATS_LAST_HOUR', 'Letzte Stunde');
