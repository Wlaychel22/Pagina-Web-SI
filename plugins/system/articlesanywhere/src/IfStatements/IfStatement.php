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

namespace RegularLabs\Plugin\System\ArticlesAnywhere\IfStatements;

defined('_JEXEC') or die;

use RegularLabs\Library\StringHelper as RL_String;
use RegularLabs\Plugin\System\ArticlesAnywhere\DataGroups\DataGroup;

class IfStatement
{
    private array $match;
    private Tags  $tags;

    /**
     * @param array $match
     */
    public function __construct($match)
    {
        $this->match = $match;
        $this->tags  = new Tags($match[0]);
    }

//    public function getTags()
//    {
//        return $this->tags;
//    }

    /**
     * @return DataGroup[]
     */
    public function getDataGroups()
    {
        $data_groups = [];

        foreach ($this->tags->getTags() as $tag)
        {
            $data_groups = array_merge($data_groups, $tag->getDataGroups());
        }

        return $data_groups;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        foreach ($this->tags->getTags() as $tag)
        {
            if ($tag->pass())
            {
                return $tag->getOutput();
            }
        }

        return '';
    }

    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags->getTags();
    }

    /**
     * @param string $html
     */
    public function replace(&$html)
    {
        $output = $this->getOutput();

        $html = RL_String::replaceOnce($this->match[0], $output, $html);
    }

    /**
     * @param array   $values
     * @param Numbers $numbers
     */
    public function setValues($values, Numbers $numbers)
    {
        foreach ($this->tags->getTags() as $tag)
        {
            $tag->setValues($values, $numbers);
        }
    }
}
