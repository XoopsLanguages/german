<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: de

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Fehlerprotokollierung und Leistungsanalyse mit PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar anzeigen');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug aktivieren');
define('_MI_DEBUGBAR_FILESDEBUG', 'Tab für eingebundene Dateien aktivieren');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Alle PHP-Dateien anzeigen, die während der Anfrage geladen wurden');
define('_MI_DEBUGBAR_SLOWQUERY', 'Schwellenwert für langsame Abfragen (Sekunden)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Abfragen langsamer als dieser Wert werden rot hervorgehoben (z.B. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Abfrageprotokollierung');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Alle Abfragen oder nur langsame und Fehler');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Alle Abfragen');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Nur langsame und Fehler');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray-Integration aktivieren');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Debug-Daten an Ray senden');

define('_MI_DEBUGBAR_ADMENU1', 'Start');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Über');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Zurück zur Verwaltung von ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Übersicht');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Haftungsausschluss');
\define('_MI_DEBUGBAR_LICENSE', 'Lizenz');
\define('_MI_DEBUGBAR_SUPPORT', 'Unterstützung');
