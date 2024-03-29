<?php

/***************************************************************************
*                            Dolphin Smart Community Builder
*                              -----------------
*     begin                : Mon Mar 23 2006
*     copyright            : (C) 2006 BoonEx Group
*     website              : http://www.boonex.com/
* This file is part of Dolphin - Smart Community Builder
*
* Dolphin is free software. This work is licensed under a Creative Commons Attribution 3.0 License. 
* http://creativecommons.org/licenses/by/3.0/
*
* Dolphin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
* without even the implied warranty of  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the Creative Commons Attribution 3.0 License for more details. 
* You should have received a copy of the Creative Commons Attribution 3.0 License along with Dolphin, 
* see license.txt file; if not, write to marketing@boonex.com
***************************************************************************/

require_once( BX_DIRECTORY_PATH_BASE . 'scripts/BxBaseConfig.php' );

/***
 template variables
***/

// path to the images used in the template
$site['images']	= $site['url'] . "templates/tmpl_{$GLOBALS['tmpl']}/images/";
$site['zodiac']	= "templates/tmpl_{$GLOBALS['tmpl']}/images/zodiac/";
$site['icons']	= $site['url'] . "templates/tmpl_{$GLOBALS['tmpl']}/images/icons/";
$site['css_dir']= "templates/tmpl_{$GLOBALS['tmpl']}/css/";

class BxTemplConfig extends BxBaseConfig {
	function BxTemplConfig($site) {
		BxBaseConfig::BxBaseConfig($site);
	}
}

?>