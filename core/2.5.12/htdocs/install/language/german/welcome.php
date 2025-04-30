<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> ist ein Open-Source,
    objektorientiertes Web-Publishing-System, das in PHP geschrieben wurde. Es ist ein ideales Werkzeug
    zur Entwicklung kleiner bis großer dynamischer Community-Websites, Intranet-Portale, Unternehmensportale, Weblogs und vieles mehr.
</p>
<p>
    XOOPS wird unter den Bedingungen der
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    Version 2 oder höher veröffentlicht und kann kostenlos genutzt und modifiziert werden.
    Es darf frei weiterverbreitet werden, solange die Verteilungsbedingungen der GPL eingehalten werden.
</p>
<h3>Anforderungen</h3>
<ul>
    <li>WWW-Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 7.4 oder höher, 7.3+ empfohlen</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 oder höher, 5.7+ empfohlen</li>
</ul>
<h3>Vor der Installation</h3>
<ol>
    <li>Richten Sie den WWW-Server, PHP und den Datenbankserver ordnungsgemäß ein.</li>
    <li>Bereiten Sie eine Datenbank für Ihre XOOPS-Website vor.</li>
    <li>Erstellen Sie ein Benutzerkonto und gewähren Sie dem Benutzer Zugriff auf die Datenbank.</li>
    <li>Machen Sie diese Verzeichnisse und Dateien schreibbar: %s</li>
    <li>Aus Sicherheitsgründen wird dringend empfohlen, die folgenden beiden Verzeichnisse aus dem <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">Document Root</a> zu verschieben und die Verzeichnisnamen zu ändern: %s</li>
    <li>Erstellen Sie (falls noch nicht vorhanden) und machen Sie diese Verzeichnisse schreibbar: %s</li>
    <li>Aktivieren Sie Cookies und JavaScript in Ihrem Browser.</li>
</ol>
<h3>Besondere Hinweise</h3>
<p>Einige spezifische Kombinationen von Systemsoftware können zusätzliche Konfigurationen erfordern, um mit XOOPS zu funktionieren. Wenn einer dieser Punkte auf Ihre Umgebung zutrifft, lesen Sie bitte das vollständige
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS-Installationshandbuch</a> für weitere Informationen.
</p>
<p>MySQL 8.0 wird nicht in allen PHP-Versionen unterstützt. Selbst in den unterstützten Versionen können Probleme mit der PHP-<em>mysqlnd</em>-Bibliothek erfordern, dass die <em>default-authentication-plugin</em>-Einstellung des MySQL-Servers auf <em>mysql_native_password</em> gesetzt wird, um korrekt zu funktionieren.
</p>
<p>Systeme mit aktiviertem SELinux (wie CentOS und RHEL) können zusätzlich zu den normalen Dateiberechtigungen Änderungen am Sicherheitskontext für XOOPS-Verzeichnisse erfordern, um Verzeichnisse schreibbar zu machen. Konsultieren Sie Ihre Systemdokumentation und/oder Ihren Systemadministrator.
</p>
';

return $content;

