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

defined('_JEXEC') or die;

use Joomla\CMS\Filesystem\File as JFile;
use Joomla\CMS\Filesystem\Folder as JFolder;

class PlgSystemArticlesAnywhereInstallerScript
{
    public function postflight($install_type, $adapter)
    {
        if ( ! in_array($install_type, ['install', 'update']))
        {
            return true;
        }

        self::deleteJoomla3Files();

        return true;
    }

    private static function delete($files = [])
    {
        foreach ($files as $file)
        {
            if (is_dir($file))
            {
                JFolder::delete($file);
            }

            if (is_file($file))
            {
                JFile::delete($file);
            }
        }
    }

    private static function deleteJoomla3Files()
    {
        self::delete(
            [
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Collection',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Components',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Output',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/PluginTags',

                JPATH_SITE . '/plugins/system/articlesanywhere/src/Helpers/article_model.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Helpers/article_view.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Helpers/Pagination.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Helpers/ValueHelper.php',

                JPATH_SITE . '/plugins/system/articlesanywhere/src/Area.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Config.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/CurrentArticle.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/CurrentItem.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Factory.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Params.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/Protect.php',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/config.yaml',
                JPATH_SITE . '/plugins/system/articlesanywhere/src/registeredurlparams.xml',

                JPATH_SITE . '/plugins/system/articlesanywhere/vendor',
            ]
        );
    }
}
