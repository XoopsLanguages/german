<?php

// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Upgrader</h2>

<p>
<em>Upgrade</em> wird diese XOOPS-Installation untersuchen und alle erforderlichen Patches anwenden, um sie kompatibel zu machen 
mit dem neuen XOOPS-Code. Patches können Datenbankänderungen umfassen und Standardeinstellungen für neue hinzufügen
Konfigurationselemente, Datei- und Datenaktualisierungen und mehr.
<p>
Nach jedem Patch meldet der Upgrader den Status und wartet darauf, dass Ihre Eingaben fortgesetzt werden. Am
Am Ende des Upgrades geht die Kontrolle an die Systemmodul-Update-Funktion über.

<div class="alert alert-warning">
Vergessen Sie nach Abschluss des Upgrades nicht Folgendes:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> Löschen Sie den Upgrade-Ordner</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> Aktualisieren Sie alle geänderten Module</li>
</div>

EOT,
);
