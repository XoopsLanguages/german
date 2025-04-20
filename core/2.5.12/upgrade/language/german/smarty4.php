<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4-Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Scanner-Ergebnisse');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Scan starten');
define('_XOOPS_SMARTY4_SCANNER_END', 'Scanner beenden');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regel');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Übereinstimmung');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Datei');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Anzahl der Korrekturen');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuelle Überprüfung erforderlich');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Nicht schreibbar');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Optionen für erneuten Scan');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Aktivieren Sie das Kontrollkästchen „Ja“ unten und klicken Sie dann auf die Schaltfläche „Scan starten“, um gefundene Probleme automatisch zu beheben.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Als abgeschlossen markieren');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Vorlagenverzeichnis (optional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Vorlagenerweiterung (optional)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 führt eine bedeutende Änderung ein: Smarty 4</h3>

<p>Leider kann diese Änderung einige ältere Themes beeinträchtigen. Bevor Sie mit dem Upgrade fortfahren, stellen Sie bitte sicher, dass Sie die folgenden Schritte befolgen:

<li>Führen Sie preflight.php aus, um nach veralteten Themes oder Modulvorlagen zu suchen.</li>
<li>Wenn Probleme festgestellt werden, lesen Sie dieses Dokument, um die erforderlichen Änderungen zu verstehen, bevor Sie mit dem Upgrade fortfahren.</li>
<li>Nachdem Sie die erforderlichen Änderungen vorgenommen haben, führen Sie preflight.php erneut aus.</li>
<li>Wenn keine Probleme mehr vorliegen, können Sie mit dem Upgrade-Prozess beginnen.</li>
</p>
EOT,
);
