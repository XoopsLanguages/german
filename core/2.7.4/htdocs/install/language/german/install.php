<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Hilfetext ein-/ausblenden');

// Lizenz
//define('LICENSE_NOT_WRITEABLE', 'Die Lizenzdatei "%s" ist NICHT schreibbar!');
//define('LICENSE_IS_WRITEABLE', 'Die %s-Lizenz ist schreibbar.');

// Konfigurationsprüfungsseite
define('SERVER_API', 'Server-API');
define('PHP_EXTENSION', '%s-Erweiterung');
define('CHAR_ENCODING', 'Zeichenkodierung');
define('XML_PARSING', 'XML-Parsing');
define('REQUIREMENTS', 'Anforderungen');
define('_PHP_VERSION', 'PHP-Version');
define('RECOMMENDED_SETTINGS', 'Empfohlene Einstellungen');
define('RECOMMENDED_EXTENSIONS', 'Empfohlene Erweiterungen');
define('SETTING_NAME', 'Einstellungsname');
define('RECOMMENDED', 'Empfohlen');
define('CURRENT', 'Aktuell');
define('RECOMMENDED_EXTENSIONS_MSG', 'Diese Erweiterungen sind für den normalen Gebrauch nicht erforderlich, können aber für bestimmte Funktionen (wie Mehrsprachen- oder RSS-Unterstützung) notwendig sein. Es wird daher empfohlen, sie zu installieren.');
define('NONE', 'Keine');
define('SUCCESS', 'Erfolgreich');
define('WARNING', 'Warnung');
define('FAILED', 'Fehlgeschlagen');

// Titel (Haupt- und Unterseiten)
define('XOOPS_INSTALL_WIZARD', 'XOOPS-Installationsassistent');
define('LANGUAGE_SELECTION', 'Sprachauswahl');
define('LANGUAGE_SELECTION_TITLE', 'Wählen Sie Ihre Sprache');
define('INTRODUCTION', 'Einführung');
define('INTRODUCTION_TITLE', 'Willkommen beim XOOPS-Installationsassistenten');
define('CONFIGURATION_CHECK', 'Konfigurationsprüfung');
define('CONFIGURATION_CHECK_TITLE', 'Überprüfung Ihrer Serverkonfiguration');
define('PATHS_SETTINGS', 'Pfad-Einstellungen');
define('PATHS_SETTINGS_TITLE', 'Pfad-Einstellungen');
define('DATABASE_CONNECTION', 'Datenbankverbindung');
define('DATABASE_CONNECTION_TITLE', 'Datenbankverbindung');
define('DATABASE_CONFIG', 'Datenbankkonfiguration');
define('DATABASE_CONFIG_TITLE', 'Datenbankkonfiguration');
define('CONFIG_SAVE', 'Konfiguration speichern');
define('CONFIG_SAVE_TITLE', 'Speichern Ihrer Systemkonfiguration');
define('TABLES_CREATION', 'Tabellenerstellung');
define('TABLES_CREATION_TITLE', 'Erstellung der Datenbanktabellen');
define('INITIAL_SETTINGS', 'Erste Einstellungen');
define('INITIAL_SETTINGS_TITLE', 'Bitte geben Sie Ihre anfänglichen Einstellungen ein');
define('DATA_INSERTION', 'Daten einfügen');
define('DATA_INSERTION_TITLE', 'Speichern Ihrer Einstellungen in der Datenbank');
define('WELCOME', 'Willkommen');
define('WELCOME_TITLE', 'Willkommen auf Ihrer XOOPS-Website');

// Einstellungen (Labels und Hilfetexte)
define('XOOPS_PATHS', 'Physische XOOPS-Pfade');
define('XOOPS_URLS', 'Web-Adressen');
define('XOOPS_ROOT_PATH_LABEL', 'Physischer Pfad zum XOOPS-Dokumentenstamm');
define('XOOPS_ROOT_PATH_HELP', 'Physischer Pfad zum XOOPS-Dokumentenverzeichnis (bedient) OHNE abschließenden Schrägstrich');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS-Bibliotheksverzeichnis');
define('XOOPS_LIB_PATH_HELP', 'Physischer Pfad zum XOOPS-Bibliotheksverzeichnis OHNE abschließenden Schrägstrich, für zukünftige Kompatibilität. Platzieren Sie den Ordner außerhalb von ' . XOOPS_ROOT_PATH_LABEL . ', um ihn sicherer zu machen.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS-Datendateienverzeichnis');
define('XOOPS_DATA_PATH_HELP', 'Physischer Pfad zum XOOPS-Datendateienverzeichnis (schreibbar) OHNE abschließenden Schrägstrich, für zukünftige Kompatibilität. Platzieren Sie den Ordner außerhalb von ' . XOOPS_ROOT_PATH_LABEL . ', um ihn sicherer zu machen.');
define('XOOPS_URL_LABEL', 'Website-Adresse (URL)');
define('XOOPS_URL_HELP', 'Haupt-URL, die für den Zugriff auf Ihre XOOPS-Installation verwendet wird');
define('LEGEND_CONNECTION', 'Serververbindung');
define('LEGEND_DATABASE', 'Datenbank');
define('DB_HOST_LABEL', 'Server-Hostname');
define('DB_HOST_HELP', 'Hostname des Datenbankservers. Wenn Sie unsicher sind, funktioniert <em>localhost</em> in den meisten Fällen');
define('DB_USER_LABEL', 'Benutzername');
define('DB_USER_HELP', 'Name des Benutzerkontos, das für die Verbindung zum Datenbankserver verwendet wird');
define('DB_PASS_LABEL', 'Passwort');
define('DB_PASS_HELP', 'Passwort Ihres Datenbank-Benutzerkontos');
define('DB_NAME_LABEL', 'Datenbankname');
define('DB_NAME_HELP', 'Der Name der Datenbank auf dem Host. Der Installer versucht, die Datenbank zu erstellen, falls sie nicht existiert');
define('DB_CHARSET_LABEL', 'Datenbank-Zeichensatz');
define('DB_CHARSET_HELP', 'MySQL unterstützt Zeichensätze, die es Ihnen ermöglichen, Daten in verschiedenen Zeichensätzen zu speichern und Vergleiche nach verschiedenen Sortierungen durchzuführen.');
define('DB_COLLATION_LABEL', 'Datenbank-Sortierung');
define('DB_COLLATION_HELP', 'Eine Sortierung ist ein Regelwerk zum Vergleichen von Zeichen in einem Zeichensatz.');
define('DB_PREFIX_LABEL', 'Tabellenpräfix');
define('DB_PREFIX_HELP', 'Dieser Präfix wird allen neu erstellten Tabellen hinzugefügt, um Namenskonflikte in der Datenbank zu vermeiden. Wenn Sie unsicher sind, behalten Sie die Standardeinstellung bei');
define('DB_PCONNECT_LABEL', 'Dauerhafte Verbindung verwenden');
define('DB_PCONNECT_HELP', "Standard ist 'Nein'. Lassen Sie es leer, wenn Sie unsicher sind");
define('DB_DATABASE_LABEL', 'Database');
define('LEGEND_ADMIN_ACCOUNT', 'Administrator Account');
define('ADMIN_LOGIN_LABEL', 'Administrator Login:'); // L37
define('ADMIN_EMAIL_LABEL', 'Administrator E-mail:'); // L38
define('ADMIN_PASS_LABEL', 'Administrator Passwort:'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Passwort bestätigen:'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Zurück'); // L42
define('BUTTON_NEXT', 'Nächster Schritt'); // L47
// Messages
define('XOOPS_FOUND', '%s gefunden!');
define('CHECKING_PERMISSIONS', 'Überprüfe Datei- und Ordnerattribute ...'); // L82
define('IS_NOT_WRITABLE', '%s ist NICHT beschreibbar.'); // L83
define('IS_WRITABLE', '%s ist beschreibbar.'); // L84
define('XOOPS_PATH_FOUND', 'Pfad gefunden!');
//define('READY_CREATE_TABLES', 'Es wurden keine XOOPS Tabellen gefunden.<br />Der Installations-Assistent wird nun die XOOPS System Tabellen erstellen<br />Bitte auf den Button für den nächsten Schritt klicken.');
define('XOOPS_TABLES_FOUND', 'In der Datenbank existieren bereits XOOPS System Tabellen.<br />Bitte auf den Button für den nächsten Schritt klicken.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS System Tabellen wurden erstellt!<br />Bitte auf den Button für den nächsten Schritt klicken.');
//define('READY_INSERT_DATA', 'Der Installations-Assistent ist nun bereit, die Daten in Ihre Datenbank zu schreiben.');
//define('READY_SAVE_MAINFILE', 'Der Installations-Assistent ist nun bereit, die Einstellungen in der <em>mainfile.php</em> zu speichern.<br />Bitte auf den Button für den nächsten Schritt klicken.');
define('SAVED_MAINFILE', 'Die Einstellungen wurden in der mainfile.php gespeichert!');
define('SAVED_MAINFILE_MSG', 'Der Installations-Assistent hat die Einstellungen in der mainfile.php gespeichert!. Bitte auf den Button für den nächsten Schritt klicken.');
define('DATA_ALREADY_INSERTED', 'Es existieren bereits XOOPS Daten in Ihrer Datenbank.<br />Bitte auf den Button für den nächsten Schritt klicken.');
define('DATA_INSERTED', 'Die Daten wurden in die Datenbank geschrieben.<br />Bitte auf den Button für den nächsten Schritt klicken.');
// %s is database name
define('DATABASE_CREATED', 'Datenbank %s wurde erstellt!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Tabelle %s konnte nicht erstellt werden'); // L118
define('TABLE_CREATED', 'Tabelle %s erstellt.'); // L45
define('ROWS_INSERTED', '%d Einträge wurden in die Datenbank %s geschrieben.'); // L119
define('ROWS_FAILED', 'Fehler beim Schreiben von %d entries in die Tabelle %s.'); // L120
define('TABLE_ALTERED', 'Tabelle %s wurde aktualisiert.'); // L133
define('TABLE_NOT_ALTERED', 'Fehler beim Aktualisieren der Tabelle %s.'); // L134
define('TABLE_DROPPED', 'Tabelle %s wurde gelöscht.'); // L163
define('TABLE_NOT_DROPPED', 'Fehler beim Löschen der Tabelle %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Auf den angegebenen Ordner konnte nicht zugegriffen werden. Bitte vergewissern Sie sich, dass er existiert und vom Server gelesen werden kann!');
define('ERR_NO_XOOPS_FOUND', 'Es konnte keine XOOPS Installation im angegebenen Ordner gefunden werden!');
define('ERR_INVALID_EMAIL', 'Ungültige Email-Adresse'); // L73
define('ERR_REQUIRED', 'Die Eingabe ist erfoderlich.'); // L41
define('ERR_PASSWORD_MATCH', 'Die beiden Passwörter stimmen nicht überein!');
define('ERR_NEED_WRITE_ACCESS', 'Der Server muss Schreibrechte auf die folgenden Ordner bzw. Dateien besitzen.<br />(z.B. <em>chmod 777 Ordner_Name</em>, <em>chmod 666 Datei_Name</em> auf einem UNIX/LINUX Server)<br />Wenn diese nicht vorhanden sind oder nicht ordnungsgemäss erstellt wurden, erstellen Sie diese bitte manuell und vergeben anschliessend die entsprechenden Rechte.');
define('ERR_NO_DATABASE', 'Es konnte keine Datenbank erstellt werden. Bitte kontaktieren Sie Ihren Server-Administrator.'); // L31
define('ERR_NO_DBCONNECTION', 'Es konnte keine Verbindung zum Datenbankserver hergestellt werden.'); // L106
define('ERR_WRITING_CONSTANT', 'Fehler beim Schreiben der Konstante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Die Verteilungsdatei konnte nicht nach %s kopiert werden.');
define('ERR_WRITE_MAINFILE', 'Es konnte nicht in %s geschrieben werden. Bitte überprüfen Sie die Dateiberechtigung und versuchen Sie es erneut.');
define('ERR_READ_MAINFILE', '%s konnte nicht zum Lesen geöffnet werden');
define('ERR_INVALID_DBCHARSET', "Der zeichensatz '%s' ist nicht verfügbar.");
define('ERR_INVALID_DBCOLLATION', "Die Kollation '%s' ist nicht verfügbar.");
define('ERR_CHARSET_NOT_SET', 'Default Character Set ist nicht gesetzt für die XOOPS Datenbank.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Unterstützung');
define('LOGIN', 'Anmeldung');
define('LOGIN_TITLE', 'Login');
define('USER_LOGIN', 'Administrator-Login');
define('USERNAME', 'Benutzername:');
define('PASSWORD', 'Passwort :');
define('ICONV_CONVERSION', 'Zeichensatz Konvertierung');
define('ZLIB_COMPRESSION', 'Zlib Kompression');
define('IMAGE_FUNCTIONS', 'Image Funktion');
define('IMAGE_METAS', 'Bildmetadaten (exif)');
define('FILTER_FUNCTIONS', 'Filterfunction');
define('ADMIN_EXIST', 'Ein Administratorzugang existiert bereits.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren');
define('CONFIG_SITE', 'Seitenkonfiguration');
define('CONFIG_SITE_TITLE', 'Seitenkonfiguration');
define('MODULES', 'Moduleinstallation');
define('MODULES_TITLE', 'Moduleinstallation');
define('THEME', 'Themeauswahl');
define('THEME_TITLE', 'Wählen Sie ihr Theme aus');
define('INSTALLED_MODULES', 'Die folgenden Module wurden installiert.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren');
define('NO_MODULES_FOUND', 'Keine Module gefunden.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren');
define('NO_INSTALLED_MODULES', 'Keine Module installiert.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren');
define('THEME_NO_SCREENSHOT', 'Kein Vorschaubild gefunden.');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Password Stärke: ');
define('PASSWORD_DESC', 'Password nicht vorhanden');
define('PASSWORD_GENERATOR', 'Password Generator');
define('PASSWORD_GENERATE', 'Erzeuge');
define('PASSWORD_COPY', 'Kopieren');
define('PASSWORD_VERY_WEAK', 'sehr schwach');
define('PASSWORD_WEAK', 'schwach');
define('PASSWORD_BETTER', 'besser');
define('PASSWORD_MEDIUM', 'mittel');
define('PASSWORD_STRONG', 'gut');
define('PASSWORD_STRONGEST', 'sehr gut');
//2.5.7
define('WRITTEN_LICENSE', 'XOOPS Lizenz %s geschriben. Lizenzschlüssel: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Erneut versuchen');
define('CHMOD_CHGRP_IGNORE', 'Auf jeden Fall verwenden');
define('CHMOD_CHGRP_ERROR', 'Der Installer kann die Konfigurationsdatei%1$s.<p>möglicherweise nicht schreiben. PHP schreibt Dateien unter Benutzer%2$sund Gruppe%3$s.<p>Das Verzeichnis%4$s/ hat Benutzer%5$sund Gruppe%6$s');
//2.5.9
define('CURL_HTTP', 'Client-URL-Bibliothek (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Cookie-Domain für die Website');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domain zum Setzen von Cookies. Kann leer sein, der vollständige Host von URL (www.example.com) oder die registrierte Domain ohne Subdomains (example.com) zur gemeinsamen Nutzung über Subdomains (www.example.com und blog.example.com).');
define('INTL_SUPPORT', 'Internationalisierungsfunktionen');
define('XOOPS_SOURCE_CODE', 'XOOPS auf GitHub');
define('XOOPS_INSTALLING', 'Installieren');
define('XOOPS_ERROR_ENCOUNTERED', 'Fehler');
define('XOOPS_ERROR_SEE_BELOW', 'Siehe unten für Details.');
define('MODULES_AVAILABLE', 'Verfügbare Module');
define('INSTALL_THIS_MODULE', '%s hinzufügen');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Die Konfigurationsdatei %s konnte nicht kopiert werden.');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPSSite');
define('_WEBSITE_SLOGAN', 'Benutze es einfach!');
define('_WEBSITE_META_KEYWORDS', 'xoops, Webanwendungs-Framework, CMS, Content-Management-System');
define('_WEBSITE_FOOTER', "Unterstützt von XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Das XOOPS-Projekt</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS ist ein dynamisches, objektorientiertes Open-Source-Portalskript, das in PHP geschrieben wurde.');
define('_WEBSITE_CENSOR_REPLACE', 'Hoppla');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
