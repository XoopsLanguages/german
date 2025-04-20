<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Ihre Website</h3>
<p>Sie können jetzt die <a href='../index.php'>Startseite Ihrer Website</a> aufrufen.</p>
<h3>Support</h3>
<p>Besuchen Sie <a href='https://xoops.org/' rel='external'>Das XOOPS-Projekt</a></p>
<p><strong>ACHTUNG:</strong> Ihre Website enthält derzeit nur die grundlegende Funktionalität. 
Bitte besuchen Sie <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a>, 
um mehr darüber zu erfahren, wie Sie XOOPS erweitern können, um Textseiten, Fotogalerien, Foren und mehr 
mit <em>Modulen</em> bereitzustellen sowie das Erscheinungsbild Ihrer XOOPS-Website mit <em>Themes</em> anzupassen.</p>
";

$content .= "<h3>Sicherheitskonfiguration</h3>
<p>Das Installationsprogramm wird versuchen, Ihre Website für Sicherheitsaspekte zu konfigurieren. Bitte überprüfen Sie nochmals, ob:
<div class='confirmMsg'>
Die Datei <em>mainfile.php</em> schreibgeschützt ist.<br>
Entfernen Sie den Ordner <em>{$installer_modified}</em> (oder <em>install</em>, falls er nicht automatisch vom Installationsprogramm umbenannt wurde) von Ihrem Server.
</div>
</p>
";
