<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Blockverwaltung');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Verwalten');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Neuen Block hinzufügen');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Block bearbeiten');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Block klonen');

// Formulare
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Benutzerdefinierter Block');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Alle Typen');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Module');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Gruppen');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Seite');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Block anzeigen ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Block ausblenden ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Klonen');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Links');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Oben links');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Oben zentriert');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Oben rechts');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Rechts');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Unten links');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Unten zentriert');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Unten rechts');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Fußzeile links');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Fußzeile zentriert');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Fußzeile rechts');

define('_AM_SYSTEM_BLOCKS_ADD', 'Block hinzufügen');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Block verwalten');
define('_AM_SYSTEM_BLOCKS_NAME', 'Name');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Blocktyp');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Seitenblock - Links');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Seitenblock - Rechts');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Zentraler Block - Links');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Zentraler Block - Rechts');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Zentraler Block - Zentrum');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Zentraler Block - Unten links');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Zentraler Block - Unten rechts');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Fußzeilenblock - Links');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Fußzeilenblock - Zentrum');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Fußzeilenblock - Rechts');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Zentraler Block - Unten');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Gewichtung');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Sichtbar');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Sichtbar in');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Startseite');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Alle Seiten');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Nicht zugewiesen');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Titel');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Inhalt');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Nützliche Tags:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s gibt %s aus');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Inhaltstyp');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'PHP-Skript');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Automatisches Format (Smilies aktiviert)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Automatisches Format (Smilies deaktiviert)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Cache-Lebensdauer');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Benutzerdefinierter Block (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Benutzerdefinierter Block (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Benutzerdefinierter Block (Automatisches Format + Smilies)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Benutzerdefinierter Block (Automatisches Format)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Vorlage bearbeiten');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Optionen');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Block ziehen oder sortieren');

// Nachrichten
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Sind Sie sicher, dass Sie diesen Block löschen möchten? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Systemblöcke können nicht gelöscht werden!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Dieser Block kann nicht direkt gelöscht werden! Wenn Sie diesen Block deaktivieren möchten, deaktivieren Sie das Modul.');

// Tipps
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Sie können die Seitenposition oder Reihenfolge einfach per Drag\'n Drop ändern, klicken Sie auf <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> dieses Bild und gestalten Sie Ihre Seite nach Ihren Wünschen</li>
<li>Einen neuen benutzerdefinierten Block hinzufügen</li>
<li>Block online oder offline schalten, indem Sie auf <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> oder <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /> klicken</li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Fußzeile links');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Fußzeile zentriert');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Fußzeile rechts');
