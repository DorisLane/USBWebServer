<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     �Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvs_backup/e107_0.7/e107_plugins/pm/pm_update_check.php,v $
|     $Revision: 11346 $
|     $Date: 2010-02-17 13:56:14 -0500 (Wed, 17 Feb 2010) $
|     $Author: secretr $
+----------------------------------------------------------------------------+
*/
if (!defined('e107_INIT')) { exit; }

include_lan(e_PLUGIN."pm/languages/admin/".e_LANGUAGE.".php");
$dbupdatep['pm_07'] =  LAN_UPDATE_8." .617 ".ADLAN_PM_58." ".LAN_UPDATE_9." .7 ".ADLAN_PM_58;
function update_pm_07($type) {
	global $sql, $mySQLdefaultdb;
	if ($type == 'do') {
			include_once(e_PLUGIN.'pm/pm_update.php');
	} else {
		if ($sql -> db_Select("plugin", "*", "plugin_path = 'pm_menu' AND plugin_installflag='1'")) {
			 if ($sql -> db_Count('pm_messages', '(*)')) {
				return FALSE;
			} else {
				return TRUE;
			}
		} else {
			return TRUE;
		}
	}
}

?>		
