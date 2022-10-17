<?php
/**
 * @package         Articles Anywhere
 * @version         12.5.0
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://regularlabs.com
 * @copyright       Copyright © 2022 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

namespace RegularLabs\Plugin\System\ArticlesAnywhere\DataGroups\Helpers;

defined('_JEXEC') or die;

use Joomla\CMS\Date\Date as JDate;
use Joomla\CMS\Factory as JFactory;
use Joomla\CMS\Language\Text as JText;
use RegularLabs\Library\Date as RL_Date;
use RegularLabs\Library\RegEx as RL_RegEx;

class Date
{
    private static array $no_date_keys = [
        'text', 'introtext', 'fulltext',
        'title', 'description',
        'text', 'textarea', 'editor',
        'category-title', 'category-description',
        'metakey', 'metadesc',
        'id', 'title', 'alias',
        'category-id', 'category-title', 'category-alias', 'category-description',
        'author-id', 'author-name', 'author-username',
        'modifier-id', 'modifier-name', 'modifier-username',
    ];

    public static function isDate($key, $value)
    {
        if ( ! self::keyIsPotentialDate($key))
        {
            return false;
        }

        return self::valueIsDate($value);
    }

    public static function keyIsPotentialDate($key)
    {
        return ! in_array($key, self::$no_date_keys, true);
    }

    /**
     * @param Text $string
     */
    public static function process($string, $key, $attributes)
    {
        if ( ! empty($attributes->output)
            && in_array($attributes->output, ['value', 'values', 'raw'], true))
        {
            return $string;
        }

        if ( ! self::isDate($key, $string))
        {
            return $string;
        }

        return self::toString($string, $attributes);
    }

    public static function toString($value, $attributes)
    {
        $showtime        = $attributes->showtime ?? true;
        $format          = $attributes->format ?? '';
        $modify          = $attributes->modify ?? '';
        $is_custom_field = $attributes->is_custom_field ?? false;

        if (empty($format))
        {
            $format = $showtime ? JText::_('DATE_FORMAT_LC2') : JText::_('DATE_FORMAT_LC1');
        }

        if (JFactory::getLanguage()->hasKey($format))
        {
            // $format is an existing language key
            $format = JText::_($format);
        }

        if (strpos($format, '%') !== false)
        {
            $format = RL_Date::strftimeToDateFormat($format);
        }

        $app = JFactory::getApplication();

        if ($is_custom_field)
        {
            // Don't pass custom fields through JFactory::getDate, as it will double the offset
            $date = new JDate($value);
        }
        else
        {
            $date = JFactory::getDate($value, 'UTC');
            $date->setTimezone($app->getIdentity()->getTimezone());
        }

        if ($modify)
        {
            $date->modify($modify);
        }

        return $date->format($format, ! $is_custom_field);
    }

    public static function valueIsDate($value)
    {
        // Check if string could be a date
        if ( ! is_string($value))
        {
            return false;
        }

        if (strpos($value, ' to ') !== false)
        {
            [$from, $to] = explode(' to ', $value, 2);
            $from = RL_RegEx::replace('^from ', '', $from);

            return self::valueIsDate($from) && self::valueIsDate($to);
        }

        if (
            // Dates must contain a '-' and not letters
            (strpos($value, '-') === false)
            || RL_RegEx::match('^[a-z]', $value)
            // Start with Y-m-d format
            || ! RL_RegEx::match('^[0-9]{4}-[0-9]{2}-[0-9]{2}', $value)
            // Check string it passes a simple strtotime
            || ! strtotime($value)
        )
        {
            return false;
        }

        return true;
    }
}
