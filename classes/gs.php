<?php
require_once("classes/func.php");
class gs extends TopBase {


	public function get_content() {
		
	$query = "SELECT 
	avatar.name AS avatar_name,
	avatar.level AS avatar_level,
	avatar.race_class_res_id,
	avatar.gear_score,
	soul.faction_res_id,
	guild.name AS guild_name
	FROM avatar
	LEFT JOIN soul ON soul.id = avatar.soul_id
	LEFT JOIN guild_member_descriptors ON guild_member_descriptors.avatar_id = avatar.id
	LEFT JOIN guild ON guild.id = guild_member_descriptors.guild_id
	ORDER BY avatar.gear_score DESC
	LIMIT 25";
	
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		
;
		
	
					
		
			

	    require_once('/views/top/gearscore.php');

        return true;
    }
}
?>