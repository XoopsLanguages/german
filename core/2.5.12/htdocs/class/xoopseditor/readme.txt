Benutzerhandbuch für xoopseditor

xoopseditor bietet eine Sammlung von Editoren für XOOPS.

Anleitung:

1) Überprüfen der Dateien
Prüfen Sie die Datei xoops_version.php im Verzeichnis /xoopseditor/, um sicherzustellen, dass sie neuer ist als Ihre aktuellen Dateien.

2) Hochladen von /xoopseditor/
Laden Sie das Verzeichnis /xoopseditor/ in /XOOPS/class/ hoch, sodass es unter /XOOPS/class/xoopseditor/ verfügbar ist. Die Struktur sollte wie folgt aussehen:

XOOPS/class/xoopseditor/dhtmlext
XOOPS/class/xoopseditor/dhtmltextarea
XOOPS/class/xoopseditor/fckeditor
XOOPS/class/xoopseditor/koivi
XOOPS/class/xoopseditor/textarea
XOOPS/class/xoopseditor/tinymce

3) Konfiguration der Einstellungen (wo zutreffend)
3.1 Sprachdateien:
Unter ./dhtmlext(all editors)/language/: Erstellen Sie Ihre lokale Sprachdatei basierend auf english.php.

3.2 Editor-Konfiguration:
Unter ./dhtmlext(all editors)/editor_registry.php: Legen Sie die Konfigurationen für den Editor fest:
order: Anzeigereihenfolge, falls eine Editorauswahl verwendet wird (0 deaktiviert den Editor).

nohtml: Ermöglicht die Verwendung für Nicht-HTML-Syntax.

3.3 FCKeditor-Modul:
Kopieren Sie die Dateien aus ./FCKeditor/module/ in die Modulordner, falls modulspezifische Berechtigungen für Uploads, Speicherung oder Editoroptionen erforderlich sind.

3.3.1 ./FCKeditor/module/fckeditor.config.js: Für Editoroptionen, in der Regel müssen Sie hier nichts ändern.

3.3.2 ./FCKeditor/module/fckeditor.connector.php: Legt den Ordner für das Durchsuchen (und Speichern) von Dateien fest, z. B. XOOPS/uploads/XOOPS_FCK_FOLDER/. Diesen Ordner müssen Sie manuell erstellen.

3.3.3 ./FCKeditor/module/fckeditor.upload.php: Legt Upload-Berechtigungen und Speicherorte für Uploads fest.

3.4 FCKeditor-Upload-Ordner:
Erstellen Sie den Ordner XOOPS/uploads/fckeditor/, falls FCKeditor aktiviert ist. Dieser wird für Uploads verwendet, wenn kein anderer Upload-Ordner angegeben ist.

3.5 TinyMCE-Sprachdateien:
Laden Sie Ihre lokalen Sprachdateien für TinyMCE von http://tinymce.moxiecode.com/language.php herunter und speichern Sie diese unter ./tinymce/tinymce/jscripts/.

4) Überprüfung der Dateinamen
Auf Systemen, die zwischen Groß- und Kleinschreibung unterscheiden, stellen Sie sicher, dass die Dateinamen exakt korrekt sind. Zum Beispiel ist FCKeditor nicht identisch mit fckeditor.

5) Entwicklungsleitfaden
Schauen Sie sich die Datei /xoopseditor/sampleform.inc.php an, um einen Leitfaden für die Entwicklung zu erhalten.

