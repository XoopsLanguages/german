<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Zwei-Faktor-Authentifizierung');
define('_US_2FAM_PASSWORD', 'Ihr aktuelles Passwort');
define('_US_2FAM_ENABLE', 'Authentifizierungs-App einrichten');
define('_US_2FAM_CONFIRM', 'Authentifizierungs-App bestätigen');
define('_US_2FAM_CHOOSE', 'Wählen Sie, wie Sie Ihren zweiten Schritt erhalten möchten: eine Authentifizierungs-App oder einen Code per E-Mail.');
define('_US_2FAM_ENABLE_EMAIL', 'E-Mail-Codes verwenden');
define('_US_2FAM_EMAIL_HELP', 'E-Mail-Codes: Bei jeder Anmeldung wird ein sechsstelliger Code an %s gesendet. Weniger sicher als eine Authentifizierungs-App, da jeder, der Ihre E-Mails lesen kann, diesen Schritt bestehen kann.');
define('_US_2FAM_EMAIL_STEP', 'Wir haben einen sechsstelligen Code an %s gesendet. Geben Sie ihn unten ein, um zu bestätigen. Er ist zehn Minuten gültig.');
define('_US_2FAM_CONFIRM_EMAIL', 'E-Mail-Codes bestätigen');
define('_US_2FAM_CODE_HELP_EMAIL', 'Der sechsstellige Code aus der E-Mail, die wir Ihnen gerade gesendet haben.');
define('_US_2FAM_ENABLED_EMAIL', 'E-Mail-Codes sind eingerichtet. Um eine Änderung vorzunehmen, geben Sie Ihr aktuelles Passwort und den per E-Mail gesendeten Code oder einen Wiederherstellungscode ein. Verwenden Sie die Schaltfläche unten, um einen Code anzufordern.');
define('_US_2FAM_SEND', 'Code an mich senden');
define('_US_2FAM_MANUAL', 'Manueller Einrichtungsschlüssel');
define('_US_2FAM_SCAN', 'QR-Code für Ihre Authentifizierungs-App');
define('_US_2FAM_STEP_APP', 'Sie benötigen eine Authentifizierungs-App: Jede App oder jeder Passwort-Manager, der zeitbasierte Einmalcodes (TOTP) erzeugt, funktioniert – auf dem Smartphone oder Computer. Falls Sie noch keine haben, installieren Sie zunächst eine Ihrer Wahl (z. B. Google Authenticator, Microsoft Authenticator, Aegis oder FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Fügen Sie in der App ein Konto hinzu: Scannen Sie diesen QR-Code, oder wählen Sie die manuelle Eingabe und geben Sie den darunter angezeigten Einrichtungsschlüssel ein.');
define('_US_2FAM_STEP_CODE', 'Die App zeigt jetzt einen sechsstelligen Code an, der sich alle 30 Sekunden ändert. Geben Sie den gerade angezeigten Code unten ein und bestätigen Sie.');
define('_US_2FAM_CODE_HELP', 'Der sechsstellige Code, den Ihre Authentifizierungs-App gerade anzeigt.');
define('_US_2FAM_HTTP', 'Diese Verbindung verwendet einfaches HTTP. Ihr Passwort, Ihre Sitzung, der Einrichtungsschlüssel und die Wiederherstellungscodes können abgefangen werden. Verwenden Sie nach Möglichkeit HTTPS.');
define('_US_2FAM_CODES', 'Speichern Sie diese Wiederherstellungscodes jetzt');
define('_US_2FAM_CODES_HELP', 'Jeder Code funktioniert nur einmal. Diese Codes werden nicht erneut angezeigt. Bewahren Sie sie an einem sicheren Ort auf, getrennt von diesem Konto.');
define('_US_2FAM_DISABLE', 'Zwei-Faktor-Authentifizierung deaktivieren');
define('_US_2FAM_REGENERATE', 'Wiederherstellungscodes ersetzen');
define('_US_2FAM_ENABLED', 'Eine Authentifizierungs-App ist eingerichtet. Geben Sie Ihr aktuelles Passwort und einen Authentifizierungs- oder Wiederherstellungscode ein, um eine Änderung vorzunehmen.');
define('_US_2FAM_DISABLED', 'Die Zwei-Faktor-Authentifizierung ist deaktiviert.');
define('_US_2FAM_PAUSED', 'Die Website hat Zwei-Faktor-Abfragen pausiert. Ihr Faktor bleibt erhalten, und „Angemeldet bleiben“ ist für eingerichtete Konten weiterhin nicht verfügbar.');
define('_US_2FAM_UNAVAILABLE', 'Die Einrichtung oder Verwaltung der Zwei-Faktor-Authentifizierung ist nicht verfügbar. Bitte wenden Sie sich an den Website-Administrator.');
define('_US_2FAM_STARTAGAIN', 'Die Einrichtung ist abgelaufen oder das Konto hat sich geändert. Geben Sie Ihr Passwort ein, um die Einrichtung erneut zu starten.');
define('_US_2FAM_BADPASSWORD', 'Ihr aktuelles Passwort wurde nicht akzeptiert.');
define('_US_2FAM_RESET', 'Zwei-Faktor-Authentifizierung dieses Benutzers zurücksetzen');
define('_US_2FAM_STATUS_NONE', 'Nicht eingerichtet');
define('_US_2FAM_STATUS_TOTP', 'Authentifizierungs-App eingerichtet');
define('_US_2FAM_STATUS_EMAIL', 'E-Mail-Codes eingerichtet');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status nicht verfügbar');
define('_US_2FAM_RESET_HELP', 'Dies deaktiviert den zweiten Faktor des Benutzers, unabhängig von der eingerichteten Methode, und widerruft dessen Wiederherstellungscodes und „Angemeldet bleiben“-Cookies. Bestehende angemeldete Sitzungen bleiben aktiv. Geben Sie zur Bestätigung Ihr eigenes Administratorpasswort ein.');
define('_US_2FAM_RESET_DONE', 'Die Zwei-Faktor-Authentifizierung des Benutzers wurde zurückgesetzt.');
define('_US_2FAM_BACK', 'Zurück zum Konto');
define('_US_2FAM_DONE', 'Die Zwei-Faktor-Authentifizierung ist aktiviert.');
define('_US_2FAM_REPLACED', 'Vorherige Wiederherstellungscodes wurden widerrufen.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: Zwei-Faktor-Authentifizierung geändert');
define('_US_2FAM_NOTICE_BODY', 'Die Zwei-Faktor-Authentifizierung oder die Wiederherstellungscodes für Ihr Konto bei %s wurden von %s aus geändert. Falls Sie das nicht waren, wenden Sie sich an den Website-Administrator.');
define('_US_2FAM_RESET_SUBJECT', '%s: ein Administrator hat Ihre Zwei-Faktor-Authentifizierung zurückgesetzt');
define('_US_2FAM_RESET_BODY', 'Ein Administrator hat Ihren zweiten Faktor deaktiviert und dessen Wiederherstellungscodes bei %s von %s aus widerrufen. Bestehende angemeldete Sitzungen bleiben aktiv. Melden Sie sich an und richten Sie die Zwei-Faktor-Authentifizierung erneut ein. Wenden Sie sich an den Website-Administrator, falls dies unerwartet war.');
