<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS-Aktualisierung</h2>

<p>
<em>Upgrade</em> überprüft diese XOOPS-Installation und wendet alle notwendigen Patches an, 
um sie mit dem neuen XOOPS-Code kompatibel zu machen. Patches können Datenbankänderungen, 
das Hinzufügen von Standardwerten für neue Konfigurationselemente, Datei- und Datenaktualisierungen 
und mehr beinhalten.
</p>
<p>
Nach jedem Patch berichtet das Upgrade-Skript über den Status und wartet auf Ihre Eingabe, um fortzufahren.
Am Ende der Aktualisierung wird die Steuerung an die Aktualisierungsfunktion des Systemmoduls übergeben.
</p>

<div class="alert alert-warning">
Sobald die Aktualisierung abgeschlossen ist, vergessen Sie nicht:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> den Ordner <code>upgrade</code> zu löschen</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> alle geänderten Module zu aktualisieren</li>
</ul>
</div>
EOT,
);
