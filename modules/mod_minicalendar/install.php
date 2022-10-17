<?php
/********************************************************************
Product		: MiniCalendar
Date		: 13 March 2018
Copyright	: Les Arbres Design 2010-2018
Contact		: http://www.lesarbresdesign.info
Licence		: GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class mod_MiniCalendarInstallerScript
{
public function preflight($type, $parent) 
{
    if (defined('JVERSION'))
        $joomla_version = JVERSION;         // get the Joomla version (JVERSION did not exist before Joomla 2.5)
    else
        $joomla_version = '1.x';
        
    $app = JFactory::getApplication();

	if (version_compare($joomla_version,"3.2.0","<"))   // com_ajax was added to Joomla in 3.2
		{
        $app->enqueueMessage("Minicalendar requires at least Joomla 3.2.0. This is $joomla_version ", 'error');
		return false;
		}

	return true;
}

//-------------------------------------------------------------------------------
// The main install function
//
public function postflight($type, $parent)
{
// we now install language files in the module directories, so must remove them from the system-wide directories, since they would take precedence

    $dirs = glob(JPATH_SITE.'/language/*',GLOB_ONLYDIR);
    foreach ($dirs as $dir)
        {
        $sub_dir = basename($dir);
    	@unlink($dir.'/'.$sub_dir.'.mod_minicalendar.ini');
    	@unlink($dir.'/'.$sub_dir.'.mod_minicalendar.sys.ini');
        }
        
// if update check caching is disabled, disable our update site as it causes excessive traffic

    $component = JComponentHelper::getComponent('com_installer');
    $params = $component->params;
    $cache_timeout = $params->get('cachetimeout', 6, 'int');
    if ($cache_timeout == 0)
        {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true)->update($db->quoteName('#__update_sites'))->set($db->quoteName('enabled') . ' = 0')->where($db->quoteName('name') . ' = ' . $db->quote('MiniCalendar'));
        $db->setQuery($query);
        try {$db->execute();} catch (RuntimeException $e) {}
        }
        
}

}
