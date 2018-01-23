<?php
require_once("classes/func.php");
class guild extends TopBase {
	
	public function get_content() {
		
		$query = "SELECT guild.id, guild.name, guild.authority, guild.unlocked_level, avatar.name as leader_name, soul.faction_res_id, count(guild_members.id) AS members_count FROM guild
        LEFT OUTER JOIN (guild_member_descriptors as guild_members) ON guild_members.guild_id = guild.id
        LEFT JOIN guild_member_descriptors ON guild_member_descriptors.guild_id = guild.id AND guild_member_descriptors.rank_res_id = 408682500
        INNER JOIN avatar ON avatar.id = guild_member_descriptors.avatar_id
        INNER JOIN soul ON soul.id = avatar.soul_id
        GROUP BY guild.id
        ORDER BY guild.authority DESC
	LIMIT 25";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		
;
		
	
					
		
			

	    require_once('/views/top/guild.php');

        return true;
    }
}
?>