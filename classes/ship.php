<?php
require_once("classes/func.php");
class ship extends TopBase {
	
	public function get_content() {
		
		$query = "SELECT 
	ships.name AS ship_name,
	ships.gear_score,
	avatar.name AS avatar_name,
	soul.faction_res_id,
	guild.name AS guild_name
	FROM ships
	LEFT JOIN avatar ON avatar.soul_id = ships.owner_soul_id
	LEFT JOIN soul ON ships.owner_soul_id = soul.id
	LEFT JOIN guild_member_descriptors ON guild_member_descriptors.avatar_id = avatar.id
	LEFT JOIN guild ON guild.id = guild_member_descriptors.guild_id AND guild_member_descriptors.avatar_id = avatar.id
	ORDER BY ships.gear_score DESC
	LIMIT 25";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		
;
		
	
					
		
			

	    require_once('/views/top/ship.php');

        return true;
    }
}
?>