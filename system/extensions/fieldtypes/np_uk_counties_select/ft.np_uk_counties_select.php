<?php

if ( ! defined('EXT')) exit('Invalid file request');


/**
 * UK Counties Select Class
 *
 * @package   UK Counties Select
 * @author    Nathan Pitman <hello@nathanpitman.com>
 * @copyright 2009 Nathan Pitman
 * @license   http://creativecommons.org/licenses/by-sa/3.0/ Attribution-Share Alike 3.0 Unported
 */

class Np_uk_counties_select extends Fieldframe_Fieldtype {
	     
	/**
	* Fieldtype Info
	* @var array
	*/                                            
	var $info = array(
			'name'             => 'NP UK Counties Select',
			'version'          => '0.1',
			'desc'             => 'Creates a select menu of UK Counties.',
			'docs_url'         => 'http://nathanpitman.com'
			);
			
	/**
	* Display Field
	* 
	* @param  string  $field_name      The field's name
	* @param  mixed   $field_data      The field's current value
	* @param  array   $field_settings  The field's settings
	* @return string  The field's HTML
	*/
	function display_field($field_name, $field_data, $field_settings)
	{
	 	global $DSP;
		$counties = array("Aberdeenshire","Anglesey","Angus","Antrim","Argyllshire","Armagh","Ayrshire","Banffshire","Bedfordshire","Berkshire","Berwickshire","Brecknockshire","Buckinghamshire","Buteshire","Caernarfonshire","Caithness","Cambridgeshire","Cardiganshire","Carmarthenshire","Cheshire","Clackmannanshire","Cornwall","Cromartyshire","Cumberland","Denbighshire","Derbyshire","Devon","Dorset","Down","Dumfriesshire","Dunbartonshire","Durham","East Lothian","Essex","Fermanagh","Fife","Flintshire","Glamorgan","Gloucestershire","Hampshire","Herefordshire","Hertfordshire","Huntingdonshire","Inverness-shire","Kent","Kincardineshire","Kinross","Kirkcudbrightshire","Lanarkshire","Lancashire","Leicestershire","Lincolnshire","London (Greater)","Londonderry","Manchester (Greater)","Merioneth","Middlesex","Midlothian","Monmouthshire","Montgomeryshire","Morayshire","Nairnshire","Norfolk","Northamptonshire","Northumberland","Nottinghamshire","Orkney","Oxfordshire","Pembrokeshire","Peeblesshire","Perthshire","Radnorshire","Renfrewshire","Ross-shire","Roxburghshire","Rutland","Selkirkshire","Shetland","Shropshire","Somerset","Staffordshire","Stirlingshire","Suffolk","Surrey","Sussex","Sutherland","Tyrone","Warwickshire","West Lothian","Westmorland","Wigtownshire","Wiltshire","Worcestershire","Yorkshire");
					                 
											
		$r = $DSP->input_select_header($field_name);
		foreach ($counties as $key => $value):
			$r .= $DSP->input_select_option($key, $value, $field_data == $key);
		endforeach;
		$r .= $DSP->input_select_footer();			
		return $r; 
	}
}


?>