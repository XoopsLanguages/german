<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: de

define('_MD_DEBUGBAR_DEBUG', 'Debuggen');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Eingebundene Dateien');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-Version');
define('_MD_DEBUGBAR_NONE', 'Keine');
define('_MD_DEBUGBAR_ERRORS', 'Fehler');
define('_MD_DEBUGBAR_DEPRECATED', 'Veraltet');
define('_MD_DEBUGBAR_QUERIES', 'Abfragen');
define('_MD_DEBUGBAR_BLOCKS', 'Blöcke');
define('_MD_DEBUGBAR_EXTRA', 'Extras');
define('_MD_DEBUGBAR_TIMERS', 'Zeitgeber');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s benötigte %s Sekunden zum Laden.');
define('_MD_DEBUGBAR_TOTAL', 'Gesamt');
define('_MD_DEBUGBAR_NOT_CACHED', 'Nicht gecacht');
define('_MD_DEBUGBAR_CACHED', 'Gecacht (wird alle %s Sekunden neu generiert)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(leerer String)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool WAHR');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Datenbankabfragen');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Speichernutzung');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d Abfragen');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d Duplikate)');
define('_MD_DEBUGBAR_BYTES', '%s Bytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s-Version');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '– Fehlernummer: %s Fehlermeldung: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Fehler #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Ausnahme');
define('_MD_DEBUGBAR_RAY_QUERY', 'Abfrage #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LANGSAM');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Block (zwischengespeicherte %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Block (nicht zwischengespeichert)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Dump');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Template-Kontext');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(keine Template-Variablen)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d Variablen)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Das Verzeichnis „modules/debugbar/%s“ wurde nicht erstellt');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Beim Kopieren des Assets konnte das Verzeichnis „%s“ nicht erstellt werden');
