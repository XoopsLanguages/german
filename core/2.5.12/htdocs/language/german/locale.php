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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Eingeschränkter Zugriff');

setlocale(LC_ALL, 'de_DE');

// !!WICHTIG!! Fügen Sie '\' vor jedem Zeichen aus den reservierten Zeichen hinzu: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// Fügen Sie doppeltes '\' vor 't','r','n' ein
define('_TODAY', "\H\\e\\u\\t\\e G:i");
define('_YESTERDAY', "\G\\e\s\\t\\e\\r\\n G:i");
define('_MONTHDAY', 'j.n G:i');
define('_YEARMONTHDAY', 'j.n.Y G:i');
define('_ELAPSE', 'vor %s');
define('_TIMEFORMAT_DESC', "Gültige Formate: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" oder \"custom\" - Format wird je nach zu präsentierendem Intervall bestimmt; \"e\" - Verstrichen; \"mysql\" - Y-m-d H:i:s;<br>" . "angegebene Zeichenfolge - Siehe <a href=\"https://php.net/manual/de/function.date.php\" rel=\"external\">PHP-Handbuch</a>.");
if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * A Xoops Local
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * Money Format
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'en_US');

        return money_format($format, $number);
    }
}
