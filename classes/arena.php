<?php
require_once("classes/func.php");
class arena extends TopBase {
	
	public function get_content() {
		
		$query = "SELECT
  avatar.id,
  avatar.name,
  avatar.race_class_res_id,
  soul.faction_res_id,
  achievement.avatar_id,
  achievement.class_res_id,
  achievement.achievement,
  guild.name AS guild_name
  FROM avatar
LEFT JOIN soul ON soul.id = avatar.soul_id
LEFT JOIN guild_member_descriptors ON guild_member_descriptors.avatar_id = avatar.id
LEFT JOIN guild ON guild.id = guild_member_descriptors.guild_id
  INNER JOIN achievement
    ON achievement.avatar_id = avatar.id
GROUP BY achievement.avatar_id
        ORDER BY achievement DESC
        LIMIT 25";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		
;
		
	
					
		
			

	    require_once('/views/top/arena.php');

        return true;
    }
}
?>