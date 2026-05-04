<?php
//
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> ist eine Open-Source-Software
    Objektorientiertes Web-Publishing-System, geschrieben in PHP. Es ist ein ideales Werkzeug für
    Entwicklung kleiner bis großer dynamischer Community-Websites, unternehmensinterner Portale, Unternehmensportale, Weblogs und vielem mehr.
</p>
<p>
    XOOPS wird gemäß den Bedingungen der veröffentlicht
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Allgemeine öffentliche Lizenz (GPL)</a>
    Version 2 oder höher und kann kostenlos verwendet und geändert werden.
    Die Weiterverbreitung ist kostenlos, solange Sie die Vertriebsbedingungen des GPL einhalten.
</p>
<h3>Anforderungen</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS usw.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 oder höher, 8.4+ empfohlen</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 oder höher, 8.4.5+ empfohlen </li>
</ul>
<h3>Bevor Sie install</h3>
<ol>
    <li>Richten Sie WWW-Server, PHP und Datenbankserver ordnungsgemäß ein.</li>
    <li>Bereiten Sie eine Datenbank für Ihre XOOPS-Site vor.</li>
    <li>Bereiten Sie ein Benutzerkonto vor und gewähren Sie dem Benutzer Zugriff auf die Datenbank.</li>
    <li>Machen Sie diese Verzeichnisse und Dateien beschreibbar: %s</li>
    <li>Aus Sicherheitsgründen wird dringend empfohlen, die beiden folgenden Verzeichnisse zu verschieben <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">Dokumentstamm</a> und ändern Sie die Ordnernamen: %s</li>
    <li>Erstellen Sie (falls noch nicht vorhanden) und machen Sie diese Verzeichnisse beschreibbar: %s</li>
    <li>Aktivieren Sie Cookies und JavaScript Ihres Browsers.</li>
</ol>
<h3>Besondere Hinweise</h3>
<ol>
    <li>Einige spezifische Systemsoftwarekombinationen erfordern möglicherweise einige zusätzliche Konfigurationen, damit sie funktionieren
    mit XOOPS. Wenn eines dieser Themen auf Ihre Umgebung zutrifft, lesen Sie bitte die vollständige Anleitung
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    Installationshandbuch</a> für weitere Informationen.<br><br>

    <li><strong>SELinux</strong> aktivierte Systeme (wie z <strong>CentOS</strong>  Und <strong>RHEL</strong>) erfordern möglicherweise Änderungen am Sicherheitskontext
    für XOOPS-Verzeichnisse zusätzlich zu den normalen Dateiberechtigungen, um Verzeichnisse beschreibbar zu machen.
    Konsultieren Sie Ihre Systemdokumentation und/oder Ihren Systemadministrator.
</ol>
';

return $content;

