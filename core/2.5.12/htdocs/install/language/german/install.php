<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
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
define('DB_PCONNECT_HELP', "Standard ist 'Nein'. Lassen Sie es
