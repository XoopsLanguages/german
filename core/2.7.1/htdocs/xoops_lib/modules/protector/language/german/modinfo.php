<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

// Der Name dieses Moduls
    define($constpref . '_NAME', 'Protector');

// Eine kurze Beschreibung dieses Moduls
    define($constpref . '_DESC', 'Dieses Modul schützt Ihre XOOPS-Website vor verschiedenen Angriffen wie DoS, SQL-Injection und Variablenkontamination.');

// Menü
    define($constpref . '_ADMININDEX', 'Protector-Zentrum');
    define($constpref . '_ADVISORY', 'Sicherheitsberatung');
    define($constpref . '_PREFIXMANAGER', 'Präfix-Manager');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Berechtigungen');

// Konfigurationen
    define($constpref . '_GLOBAL_DISBL', 'Vorübergehend deaktiviert');
    define($constpref . '_GLOBAL_DISBLDSC', 'Alle Schutzmechanismen sind vorübergehend deaktiviert.<br>Vergessen Sie nicht, dies nach der Fehlerbehebung wieder zu aktivieren');

    define($constpref . '_DEFAULT_LANG', 'Standardsprache');
    define($constpref . '_DEFAULT_LANGDSC', 'Geben Sie die Sprache an, in der Nachrichten vor der Verarbeitung von common.php angezeigt werden sollen');

    define($constpref . '_RELIABLE_IPS', 'Vertrauenswürdige IPs');
    define($constpref . '_RELIABLE_IPSDSC', 'Geben Sie vertrauenswürdige IPs durch | getrennt ein. ^ markiert den Anfang, $ das Ende der Zeichenkette.');

    define($constpref . '_LOG_LEVEL', 'Protokollierungsgrad');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Sperrzeit für gesperrte IPs (Sekunden)');

    define($constpref . '_LOGLEVEL0', 'keine');
    define($constpref . '_LOGLEVEL15', 'Leise');
    define($constpref . '_LOGLEVEL63', 'leise');
    define($constpref . '_LOGLEVEL255', 'voll');

    define($constpref . '_HIJACK_TOPBIT', 'Geschützte IP-Bits für die Sitzung');
    define($constpref . '_HIJACK_TOPBITDSC', 'Schutz vor Session-Hijacking:<br>Standard 24/56 (Netzmaske für IPV4/IPV6). (Alle Bits sind geschützt)<br>Wenn Ihre IP nicht stabil ist, legen Sie den IP-Bereich durch die Anzahl der Bits fest.<br>(z. B.) Wenn sich Ihre IP im Bereich von 192.168.0.0-192.168.0.255 bewegen kann, setzen Sie hier 24 Bit');
    define($constpref . '_HIJACK_DENYGP', 'Gruppen, die keine IP-Änderung in einer Sitzung dürfen');
    define($constpref . '_HIJACK_DENYGPDSC', 'Schutz vor Session-Hijacking:<br>Wählen Sie Gruppen aus, die ihre IP während einer Sitzung nicht ändern dürfen.<br>(Ich empfehle, Administrator zu aktivieren.)');
    define($constpref . '_SAN_NULLBYTE', 'Null-Bytes bereinigen');
    define($constpref . '_SAN_NULLBYTEDSC', 'Das abschließende Zeichen "\\0" wird oft bei bösartigen Angriffen verwendet.<br>Ein Null-Byte wird in ein Leerzeichen umgewandelt.<br>(dringend empfohlen: Ein)');
    define($constpref . '_DIE_NULLBYTE', 'Beenden, wenn Null-Bytes gefunden werden');
    define($constpref . '_DIE_NULLBYTEDSC', 'Das abschließende Zeichen "\\0" wird oft bei bösartigen Angriffen verwendet.<br>(dringend empfohlen: Ein)');
    define($constpref . '_DIE_BADEXT', 'Beenden, wenn bösartige Dateien hochgeladen werden');
    define($constpref . '_DIE_BADEXTDSC', 'Wenn jemand versucht, Dateien mit bösartigen Erweiterungen wie .php hochzuladen, beendet dieses Modul Ihre XOOPS-Instanz.<br>Wenn Sie oft PHP-Dateien in B-Wiki oder PukiWikiMod anhängen, deaktivieren Sie dies.');
    define($constpref . '_CONTAMI_ACTION', 'Aktion bei gefundener Kontamination');
    define($constpref . '_CONTAMI_ACTIONDS', 'Wählen Sie die Aktion, wenn jemand versucht, System-Globalvariablen in Ihre XOOPS-Instanz zu kontaminieren.<br>(empfohlene Option ist leerer Bildschirm)');
    define($constpref . '_ISOCOM_ACTION', 'Aktion bei gefundenem isolierten Kommentar');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Schutz vor SQL-Injection:<br>Wählen Sie die Aktion, wenn ein isolierter „/*“ gefunden wird.<br>„Bereinigen“ bedeutet, ein weiteres „*/“ am Ende hinzuzufügen.<br>(empfohlene Option ist Bereinigen)');
    define($constpref . '_UNION_ACTION', 'Aktion bei gefundener UNION');
    define($constpref . '_UNION_ACTIONDSC', 'Schutz vor SQL-Injection:<br>Wählen Sie die Aktion, wenn eine Syntax wie UNION von SQL gefunden wird.<br>„Bereinigen“ bedeutet, „union“ in „uni-on“ zu ändern.<br>(empfohlene Option ist Bereinigen)');
    define($constpref . '_ID_INTVAL', 'Variablen wie ID auf Ganzzahl zwingen');
    define($constpref . '_ID_INTVALDSC', 'Alle Anfragen mit Namen „*id“ werden als Ganzzahl behandelt.<br>Diese Option schützt vor bestimmten XSS- und SQL-Injection-Angriffen.<br>Obwohl ich empfehle, diese Option zu aktivieren, kann sie Probleme mit einigen Modulen verursachen.');
    define($constpref . '_FILE_DOTDOT', 'Schutz vor Verzeichnis-Traversalen');
    define($constpref . '_FILE_DOTDOTDSC', 'Eliminiert „..“ aus allen Anfragen, die wie Verzeichnis-Traversalen aussehen');

    define($constpref . '_BF_COUNT', 'Schutz vor Brute-Force');
    define($constpref . '_BF_COUNTDSC', "Legen Sie die maximale Anzahl von Anmeldeversuchen für Gäste innerhalb von 10 Minuten fest. Wenn die fehlerhaften Anmeldeversuche diese überschreiten, wird die IP-Adresse des Gastes gesperrt.");

    define($constpref . '_BWLIMIT_COUNT', 'Bandbreitenbeschränkung');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Geben Sie die maximale Anzahl von Zugriffen auf mainfile.php während der Überwachungszeit an. Dieser Wert sollte 0 sein für normale Umgebungen mit ausreichender CPU-Bandbreite. Eine Zahl kleiner als 10 wird ignoriert.');

    define($constpref . '_DOS_SKIPMODS', 'Module, die vom DoS/Crawler-Checker ausgenommen sind');
    define($constpref . '_DOS_SKIPMODSDSC', 'Geben Sie die Verzeichnisnamen der Module durch | getrennt an. Diese Option ist nützlich für Chat-Module usw.');

    define($constpref . '_DOS_EXPIRE', 'Überwachungszeit für hohe Lasten (Sekunden)');
    define($constpref . '_DOS_EXPIREDSC', 'Dieser Wert gibt die Überwachungszeit für häufiges Neuladen (F5-Angriff) und stark belastende Crawler an.');

    define($constpref . '_DOS_F5COUNT', 'Schlechte Zählungen für F5-Angriff');
    define($constpref . '_DOS_F5COUNTDSC', 'Verhinderung von DoS-Angriffen.<br>Dieser Wert gibt die Anzahl der Neuladevorgänge an, die als bösartiger Angriff betrachtet werden.');
    define($constpref . '_DOS_F5ACTION', 'Aktion gegen F5-Angriff');

    define($constpref . '_DOS_CRCOUNT', 'Schlechte Zählungen für Crawler');
    define($constpref . '_DOS_CRCOUNTDSC', 'Verhinderung von stark belastenden Crawlern.<br>Dieser Wert gibt die Zugriffszahlen an, die als schlecht manierierter Crawler gelten.');
    define($constpref . '_DOS_CRACTION', 'Aktion gegen stark belastende Crawler');

    define($constpref . '_DOS_CRSAFE', 'Willkommener User-Agent');
    define($constpref . '_DOS_CRSAFEDSC', 'Ein Perl-Regex-Muster für User-Agent.<br>Wenn es übereinstimmt, wird der Crawler nie als stark belastend betrachtet.<br>z. B.) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Keine (nur Protokollierung)');
    define($constpref . '_OPT_SAN', 'Bereinigen');
    define($constpref . '_OPT_EXIT', 'Leerer Bildschirm');
    define($constpref . '_OPT_BIP', 'IP sperren (kein Limit)');
    define($constpref . '_OPT_BIPTIME0', 'IP sperren (Moratorium)');

    define($constpref . '_DOSOPT_NONE', 'Keine (nur Protokollierung)');
    define($constpref . '_DOSOPT_SLEEP', 'Schlafen');
    define($constpref . '_DOSOPT_EXIT', 'Leerer Bildschirm');
    define($constpref . '_DOSOPT_BIP', 'IP sperren (kein Limit)');
    define($constpref . '_DOSOPT_BIPTIME0', 'IP sperren (Moratorium)');
    define($constpref . '_DOSOPT_HTA', 'Verweigern durch .htaccess (experimentell)');

    define($constpref . '_BIP_EXCEPT', 'Gruppen, die nie als schlechte IP registriert werden');
    define($constpref . '_BIP_EXCEPTDSC', 'Ein Benutzer, der zu der hier angegebenen Gruppe gehört, wird nie gesperrt.<br>(Ich empfehle, Administrator zu aktivieren.)');

    define($constpref . '_DISABLES', 'Gefährliche Funktionen in XOOPS deaktivieren');

    define($constpref . '_DBLAYERTRAP', 'DB Layer Trapping gegen SQL-Injection aktivieren');
    define($constpref . '_DBLAYERTRAPDSC', 'Fast alle SQL-Injection-Angriffe werden durch diese Funktion abgewehrt. Diese Funktion erfordert Unterstützung von databasefactory. Sie können dies auf der Sicherheitsberatungsseite überprüfen. Diese Einstellung muss aktiviert sein. Schalten Sie sie nicht leichtfertig aus.');
    define($constpref . '_DBTRAPWOSRV', 'Nie _SERVER auf SQL-Injection prüfen');
    define($constpref . '_DBTRAPWOSRVDSC', 'Einige Server aktivieren immer DB Layer Trapping. Dies führt zu falschen Erkennungen als SQL-Injection-Angriff. Wenn Sie solche Fehler erhalten, aktivieren Sie diese Option. Beachten Sie, dass diese Option die Sicherheit des DB Layer Trapping gegen SQL-Injection schwächt.');

    define($constpref . '_BIGUMBRELLA', 'Schutz vor XSS aktivieren (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Dies schützt vor fast allen Angriffen über XSS-Schwachstellen. Es ist jedoch nicht 100% sicher');

    define($constpref . '_SPAMURI4U', 'Anti-SPAM: URLs für normale Benutzer');
    define($constpref . '_SPAMURI4UDSC', 'Wenn diese Anzahl von URLs in POST-Daten von Benutzern außer Admins gefunden wird, wird der POST als SPAM betrachtet. 0 deaktiviert diese Funktion.');
    define($constpref . '_SPAMURI4G', 'Anti-SPAM: URLs für Gäste');
    define($constpref . '_SPAMURI4GDSC', 'Wenn diese Anzahl von URLs in POST-Daten von Gästen gefunden wird, wird der POST als SPAM betrachtet. 0 deaktiviert diese Funktion.');

// 3.40b
    define($constpref . '_ADMINHOME', 'Startseite');
    define($constpref . '_ADMINABOUT', 'Über');

// 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Überprüft POST-Daten auf Spammer, die in der Datenbank von www.stopforumspam.com registriert sind. Erfordert die PHP-CURL-Bibliothek.');

// 3.60
    define($constpref . '_ADMINSTATS', 'Übersicht');
    define($constpref . '_BANIP_TIME0DSC', 'Sperrzeit in Sekunden für automatische IP-Sperren');}
