<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Eingeschränkter Zugriff');
/**
 * Lokalisierung der Mail-Funktionen
 *
 * Die deutsche Lokalisierung dient ausschließlich der Demonstration
 */
// Klassenname nicht ändern
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Konstruktor
     */
    public function __construct()
    {
        parent::__construct();
        // Es wird angenommen, dass der Zeichensatz nicht geändert werden muss
        $this->charSet = strtolower(_CHARSET);
        // Sie MÜSSEN den Sprachcode angeben, damit die Datei existiert: XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["Ihr-Sprachcode"].php
        $this->multimailer->setLanguage('de');
    }

    /**
     * Mehrsprachige Sprachen werden ermutigt, ihre eigene Methode zur Kodierung des Absendernamens zu erstellen
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeFromName($text)
    {
        // Aktivieren Sie die folgende Zeile bei Bedarf
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }

    /**
     * Mehrsprachige Sprachen werden ermutigt, ihre eigene Methode zur Kodierung des Betreffs zu erstellen
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeSubject($text)
    {
        // Aktivieren Sie die folgende Zeile bei Bedarf
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
