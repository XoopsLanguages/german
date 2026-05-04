<div id="help-template" class="outer">
    <h1 class="head">Hilfe:
        <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Zurück zur Verwaltung von Protector">
            Protector
            <img src="<{xoAdminIcons 'home.png'}>" alt="Zurück zur Verwaltung von Protector"/>
        </a>
    </h1>

    <!-- -----Hilfsinhalt ---------- -->
    <h4 class="odd">Beschreibung</h4>
    <p class="even">Protector ist ein Modul zum Schutz Ihres XOOPS CMS vor verschiedenen bösartigen Angriffen.</p>

    <h4 class="odd">Installation/Deinstallation</h4>
    <p>Definieren Sie zuerst <code>XOOPS_TRUST_PATH</code> in Ihrer <code>mainfile.php</code>, falls noch nicht geschehen.</p><br>

    <p>Kopieren Sie <code>html/modules/protector</code> aus dem Archiv in <code>XOOPS_ROOT_PATH/modules/</code></p>

    <p>Kopieren Sie <code>xoops_trust_path/modules/protector</code> aus dem Archiv in <code>XOOPS_TRUST_PATH/modules/</code></p><br>

    <p>Stellen Sie sicher, dass das Verzeichnis <code>XOOPS_TRUST_PATH/modules/protector/configs</code> beschreibbar ist.</p>

    <h4 class="odd">= So retten Sie sich im Notfall =</h4>
    <p class="even">Falls Sie von Protector gesperrt wurden, löschen Sie einfach die Dateien im Verzeichnis <code>XOOPS_TRUST_PATH/modules/protector/configs/</code></p>

    <h4 class="odd">Einführung zu den Filter-Plugins in diesem Archiv</h4>

    <p class="even">- <code>postcommon_post_deny_by_rbl.php</code><br>
        Ein Anti-SPAM-Plugin.<br>
        Alle Beiträge von IP-Adressen, die in RBL registriert sind, werden abgelehnt.<br>
        Dieses Plugin kann die Performance beim Posten beeinträchtigen, besonders in Chat-Modulen.
    </p>

    <p>- <code>postcommon_post_deny_by_httpbl.php</code><br>
        Ein Anti-SPAM-Plugin.<br>
        Beiträge von IPs, die in http:BL gelistet sind, werden abgelehnt.<br>
        Vor der Nutzung muss ein HTTPBL_KEY von <a href="http://www.projecthoneypot.org/" target="_blank">Project Honeypot</a> bezogen und in der Datei definiert werden:<br>
        <code>define('PROTECTOR_HTTPBL_KEY', '............');</code>
    </p>

    <p class="even">- <code>postcommon_post_need_multibyte.php</code><br>
        Ein Anti-SPAM-Plugin.<br>
        Beiträge ohne Mehrbyte-Zeichen (z. B. japanisch, chinesisch, koreanisch) werden abgelehnt.<br>
        Nur geeignet für Seiten in Japanisch, Traditionellem oder Vereinfachtem Chinesisch sowie Koreanisch.
    </p>

    <p>- <code>postcommon_post_htmlpurify4guest.php</code><br>
        Säubert alle Beiträge von Gästen mittels HTMLPurifier.<br>
        Falls Gäste HTML posten dürfen, wird dringend empfohlen, dieses Plugin zu aktivieren.
    </p>

    <p class="even">- <code>postcommon_register_insert_js_check.php</code><br>
        Verhindert automatische Registrierungen durch Bots.<br>
        Erfordert funktionierendes JavaScript im Browser des Besuchers.
    </p>

    <p>- <code>bruteforce_overrun_message.php</code><br>
        Gibt eine spezielle Nachricht für Besucher aus, die zu oft ein falsches Passwort eingegeben haben.<br>
        Alle Plugins mit <code>*_message.php</code> geben benutzerdefinierte Nachrichten für abgelehnte Zugriffe aus.
    </p>

    <p class="even">- <code>precommon_bwlimit_errorlog.php</code><br>
        Wenn Bandbreitenbeschränkungen greifen, wird das Ereignis in die Apache-Fehlerprotokolle geschrieben.
    </p>

    <p>Alle Plugins mit <code>*_errorlog.php</code> protokollieren Informationen in die <code>error_log</code> von Apache.</p>

    <h4 class="odd">Tutorial</h4>
    <p class="even">Tutorial folgt in Kürze.</p>

    <!-- -----Hilfsinhalt ---------- -->
</div>
