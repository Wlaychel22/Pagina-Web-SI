<?php
/********************************************************************
Product    : MiniCalendar
Date       : 1 March 2021
Copyright  : Les Arbres Design 2009-2021
Contact    : https://www.lesarbresdesign.info
Licence    : GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class ModMinicalendarHelper
{

//---------------------------------------------------------------------------------------------
// Get an array of day names starting with the start day
//
static function get_day_names($start_day)
{
	$j_days = array(JText::_('SUNDAY'),JText::_('MONDAY'),JText::_('TUESDAY'),JText::_('WEDNESDAY'),JText::_('THURSDAY'),JText::_('FRIDAY'),JText::_('SATURDAY'));
	for ($i = 0; $i < 7; $i++)
		{
		$day = ($i + $start_day) % 7;
		$days[] = $j_days[$day];
		}
	return $days;
}

//---------------------------------------------------------------------------------------------
// Get a month name
//
static function month_name($month)
{
	switch ($month)
		{
		case 1: return JText::_('JANUARY');
		case 2: return JText::_('FEBRUARY');
		case 3: return JText::_('MARCH');
		case 4: return JText::_('APRIL');
		case 5: return JText::_('MAY');
		case 6: return JText::_('JUNE');
		case 7: return JText::_('JULY');
		case 8: return JText::_('AUGUST');
		case 9: return JText::_('SEPTEMBER');
		case 10: return JText::_('OCTOBER');
		case 11: return JText::_('NOVEMBER');
		case 12: return JText::_('DECEMBER');
		}
}

//---------------------------------------------------------------------------------------------
// Draw a calendar for a single month
//
static function make_calendar($year, $month, $day_name_length, $start_day, $weekHdr, $width, $links, $debug)
{
	$current_year = date('Y');
	$current_month = date('m');
	$current_day = date('d');
	$num_columns = 7;										// without week numbers, we have 7 columns

	if (($weekHdr != '') && ($start_day == 1) && (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN'))  
		$num_columns = 8;
	else
		$weekHdr = '';										// if start day not Monday, or we are on Windows, don't do week numbers
	
	$month_class = sprintf(" month-%02d", $month);
	$html = '<table class="mod_minical_table'.$month_class.'"'.$width.'>';
	
// draw the month and year heading

    $month_string = self::month_name($month).' '.$year;
    
	$html .= '<tr class="mod_minical_month">';
	if ($links == 0)
    	$html .= '<th colspan="'.$num_columns.'">'.$month_string.'</th>';
    else
        {
        $onclick='mod_minical_ajax(-1, '.$year.', '.$month.');';
		$html .= '<th class="mod_minical_left" onclick="'.$onclick.'"><span class="mod_minical_left" ></span></th>';
    	$html .= '<th colspan="'.($num_columns - 2).'">'.$month_string.'</th>';
        $onclick='mod_minical_ajax(+1, '.$year.', '.$month.');';
		$html .= '<th class="mod_minical_right" onclick="'.$onclick.'"><span class="mod_minical_right" ></span></th>';
        }
	$html .= '</tr>';
	
// draw the day names heading

	if ($day_name_length > 0)
		{
    	$html .= '<tr class="mod_minical_day">';
		if ($weekHdr != '')
			$html .= "<th>".$weekHdr."</th>";
		$days = self::get_day_names($start_day);
		for ($i = 0; $i < 7; $i++)
			{
			$day_name = $days[$i];
			if (function_exists('mb_substr'))
				$day_short_name = mb_substr($day_name,0,$day_name_length,'UTF-8');	// prefer this if available
			else
				$day_short_name = substr($day_name,0,$day_name_length);		// use this if no mbstring library
			$html .= "<th>$day_short_name</th>";
			}
		$html .= '</tr>';
		}
	
// draw the days

	$day_time = gmmktime(5,0,0,$month,1,$year);			// GMT of first day of month
	if ($debug)
		self::mc_trace(" start:     ".gmstrftime("%Y-%m-%d %H:%M (wk %V)",$day_time));
	$first_weekday = gmstrftime("%w",$day_time);		// 0 = Sunday ... 6 = Saturday
	$first_column = ($first_weekday + 7 - $start_day) % 7; 	// column for first day
	$days_in_month = cal_days_in_month(CAL_GREGORIAN,$month,$year);
	$html .= '<tr>';
	if ($weekHdr != '')
		{
		$weeknumber = gmstrftime("%V",$day_time);			// first week number (doesn't work on Windows)
		$html .= '<td class="mod_minical_weekno">'.$weeknumber.'</td>';
		}
	if ($first_column > 0)
		$html .= '<td colspan="'.$first_column.'" class="mod_minical_nonday"></td>';		// days before the first of the month
	$column_count = $first_column;
	for ($day = 1; $day <= $days_in_month; $day++)
		{
		if ($column_count == 7)
			{
			$html .= "</tr>\n<tr>";
			$column_count = 0;
			if ($weekHdr != '')
				{
				$day_time += 604800; 		// add one week
				if ($debug)
					self::mc_trace(" next week: ".gmstrftime("%Y-%m-%d %H:%M (wk %V)",$day_time));
				$weeknumber = gmstrftime("%V",$day_time);	// week number
				$html .= '<td class="mod_minical_weekno">'.$weeknumber.'</td>';
				}
			}
		if (($year == $current_year) and ($month == $current_month) and ($day == $current_day))
			$html .= '<td class="mod_minical_today"'.'>'.$day.'</td>';	// highlight today's date
		else
			$html .=  '<td>'.$day.'</td>';
		$column_count ++;
		}
	$end_cols = 7 - $column_count;
	if ($end_cols > 0)
		$html .= '<td colspan="'.$end_cols.'" class="mod_minical_nonday"></td>';				// days after the last day of the month
	$html .= "</tr></table>\n";
    return $html;
}

//---------------------------------------------------------------------------------------------
// Draw the number of calendars requested in the module parameters
//
static function make_all_calendars($year, $month, $day_name_length, $start_day, $weekHdr, $numMonths, $fullwidth, $links, $debug)
{
    if ($fullwidth)
		{
        $div_width = ' style="width:calc(100% - 6px)"';
        $table_width = ' style="width:100%"';
		}
    else
		{
        $div_width = '';
        $table_width = '';
		}
    $html = '';
    for ($i = 1; $i <= $numMonths ; $i ++)
        {
        $html .= '<div class="mod_minical_inner"'.$div_width.'>';
        if ($debug)
            self::mc_trace("make_all_calendars() calling make_calendar() for $year, $month");
        $html .= self::make_calendar($year, $month, $day_name_length, $start_day, $weekHdr, $table_width, $links, $debug);
        $links = '';						// only draw links on first calendar
        $html .= '</div>';
        $month ++;
        if ($month > 12)
            {
            $month = 1;
            $year ++;
            }
        }
    return $html;
}

//---------------------------------------------------------------------------------------------
// The forward and backward links call here via the Joomla com_ajax component
//
static function getAjax()
{
	$jinput = JFactory::getApplication()->input;
	$offset = $jinput->get('offset','0', 'STRING');     // -1 for back one month, or +1 for forward one month
	$year = $jinput->get('year','0', 'STRING');
	$month = $jinput->get('month','0', 'STRING');
    
// Calculate the new starting month required

    $startdate = mktime(0,0,0,$month + $offset, 1, $year);
    $month = date('m',$startdate);
    $year = date('Y',$startdate);
    
// get the module parameters

	$db = JFactory::getDbo();
	$query = "select `params` from `#__modules` where `module` = 'mod_minicalendar'";
	$db->setQuery($query);
	try {
		$mparams = $db->loadResult();
		}
	catch (\RuntimeException $e) {
		echo $e->getMessage();
		return;
		}
	$params = new JRegistry($mparams);
    $day_name_length = trim($params->get('dayLength',1));
    $start_day = trim($params->get('firstDay',0));
    $weekHdr = trim($params->get('weekHdr'));
    $numMonths = trim($params->get('numMonths',1));
    $fullwidth = trim($params->get('fullwidth',1));
    $debug = $params->get('debug',0);
    
// re-make all the calendars and send them back as the Ajax response    
    
    if ($debug)
        self::mc_trace("getAjax() calling make_all_calendars() for $year, $month, numMonths = $numMonths");
    echo self::make_all_calendars($year, $month, $day_name_length, $start_day, $weekHdr, $numMonths, $fullwidth, 1, $debug);
}

//---------------------------------------------------------------------------------------------
// Initialise debugging
//
static function mc_init_debug()
{
	$locale = setlocale(LC_ALL,0);
	$langObj = JFactory::getLanguage();
	$xml_array = JInstaller::parseXMLInstallFile(JPATH_ROOT.'/modules/mod_minicalendar/mod_minicalendar.xml');
	self::mc_trace("\nMiniCalendar ver : ".$xml_array['version']);
	self::mc_trace("PHP version      : ".phpversion());
	self::mc_trace("PHP Locale       : ".print_r($locale, true));
	self::mc_trace("Server           : ".PHP_OS);
	self::mc_trace("Joomla Version   : ".JVERSION);
	self::mc_trace("Joomla Language  : ".$langObj->get('tag'));
}

//---------------------------------------------------------------------------------------------
// Send a line to the trace file
//
static function mc_trace($data)
{
   	@file_put_contents(JPATH_ROOT.'/modules/mod_minicalendar/trace.txt', $data."\n",FILE_APPEND);
}

}