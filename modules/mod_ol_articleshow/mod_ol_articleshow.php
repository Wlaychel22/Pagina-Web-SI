<?php
/**
 * @package Article Show
 * @version 4.0.2
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2016 Olwebdesign. All Rights Reserved.
 * @author Olwebdesign http://www.olwebdesign.com
 * 
 */
defined('_JEXEC') or die;
if(!isset($params) || !(count($params) > 0)) return;

if (JVERSION >= 4) require_once dirname(__FILE__).'/core/helper4.php';
if (JVERSION < 4) require_once dirname(__FILE__).'/core/helper.php';


$layout_name = $params->get('layout', 'default');
$cacheid = md5(serialize(array ($layout_name, $module->module)));
$cacheparams = new stdClass;
$cacheparams->cachemode = 'id';
$cacheparams->class = 'OlArticleShowHelper';
$cacheparams->method = 'getList';
$cacheparams->methodparams = $params;
$cacheparams->modeparams = $cacheid;
$list = JModuleHelper::moduleCache ($module, $params, $cacheparams);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_ol_articleshow', $params->get('get_style', 'default'));
