<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Zweiter Schritt');
define('_US_2FA_PROMPT', 'Geben Sie den Code aus Ihrer Authentifizierungs-App ein');
define('_US_2FA_CODE', 'Authentifizierungscode');
define('_US_2FA_PROMPT_EMAIL', 'Wir haben einen sechsstelligen Code an %s gesendet. Geben Sie ihn unten ein.');
define('_US_2FA_CODE_EMAIL', 'Code aus Ihrer E-Mail');
define('_US_2FA_SEND', 'Neuen Code senden');
define('_US_2FA_SENT', 'Ein neuer Code wurde an %s gesendet. Er ist zehn Minuten gültig.');
define('_US_2FA_SEND_WAIT', 'Vor weniger als einer Minute wurde ein Code gesendet. Prüfen Sie Ihren Posteingang und den Spam-Ordner, bevor Sie einen weiteren anfordern.');
define('_US_2FA_SEND_FAILED', 'Der Code konnte gerade nicht gesendet werden. Versuchen Sie es gleich noch einmal oder verwenden Sie einen Wiederherstellungscode.');
define('_US_2FA_EMAIL_SUBJECT', '%s: Ihr Anmeldecode');
define('_US_2FA_EMAIL_BODY', 'Ihr Anmeldecode für %s lautet:

%s

Er ist %d Minuten gültig und funktioniert nur einmal. Wenn Sie dies nicht angefordert haben, ignorieren Sie diese Nachricht und erwägen Sie, Ihr Passwort zu ändern.');
define('_US_2FA_RECOVERY', 'Stattdessen einen Wiederherstellungscode verwenden');
define('_US_2FA_RECOVERY_HINT', 'Jeder Wiederherstellungscode funktioniert nur einmal. Bei Verwendung erhalten Sie eine E-Mail.');
define('_US_2FA_SUBMIT', 'Weiter');
define('_US_2FA_STARTAGAIN', 'Diese Anmeldung ist abgelaufen oder wurde unterbrochen. Bitte beginnen Sie erneut.');
define('_US_2FA_BACKTOLOGIN', 'Zurück zum Anmeldeformular');
define('_US_2FA_BADCODE', 'Dieser Code wurde nicht akzeptiert.');
define('_US_2FA_LOCKED', 'Zu viele Versuche. Der zweite Schritt ist für fünfzehn Minuten gesperrt; ein Wiederherstellungscode funktioniert weiterhin.');
define('_US_2FA_UNAVAILABLE', 'Der zweite Schritt ist derzeit nicht verfügbar. Ein Wiederherstellungscode funktioniert weiterhin, oder wenden Sie sich an den Website-Administrator.');
define('_US_2FA_REQUIRED', 'Für dieses Konto ist die Zwei-Faktor-Authentifizierung aktiviert. Bitte melden Sie sich über die Anmeldeseite der Website an.');
define('_US_2FA_HTTP_LOGIN', 'Dieses Popup kann eine Zwei-Faktor-Anmeldung über HTTP nicht abschließen, da Ihr Passwort unverschlüsselt gesendet würde. Verwenden Sie stattdessen die Website-Anmeldung, oder bitten Sie den Administrator, HTTPS für die Website zu aktivieren.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: zweiter Schritt gesperrt');
define('_US_2FA_LOCKED_MAIL_BODY', 'Für Ihr Konto bei %s wurden von %s aus fünf falsche Codes für den zweiten Schritt eingegeben. Der zweite Schritt ist für fünfzehn Minuten gesperrt. Falls Sie das nicht waren, ändern Sie Ihr Passwort.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: ein Wiederherstellungscode wurde verwendet');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Ein Wiederherstellungscode wurde verwendet, um sich bei Ihrem Konto auf %s von %s aus anzumelden. Dieser Code funktioniert nicht mehr. Falls Sie das nicht waren, ändern Sie Ihr Passwort und setzen Sie Ihre Wiederherstellungscodes zurück.');
