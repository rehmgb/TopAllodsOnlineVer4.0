<img src="/top/images/bannertop_news.jpg" class="top_ban" />
<div id="navbar">
<span class="navbar">
<a href="/" accesskey="1">Главная</a>




<span>
	Топ 100

</span>


</span>
</div>
<div class="article">
<div ng-app="ratings" class="ng-scope">
<div ng-include="&#39;partials/rating_selector.html&#39;" ng-controller="rating_selector" class="ng-scope"><div class="ratings__selector ng-scope">
   <a href="/top/index.php?" class="ratings__button--alley">Аллея славы</a>
    <div class="ratings__buttons-row">
	<a href="/top/index.php?option=gs" class="ratings__button ratings__button--gearscore active" ng-class="{active:active == \'gs\'}">Экипировка</a>
	<a href="/top/index.php?option=guild" class="ratings__button ratings__button--guilds" ng-class="{active:active == \'guild\'}">Гильдии</a>
	<a href="/top/index.php?option=ship" class="ratings__button ratings__button--ships" ng-class="{active:active == \'ship\'}">Корабли</a>
		<a href="/top/index.php?option=arena" class="ratings__button ratings__button&#45;&#45;arena" ng-class="{active:active == \'arena\'}">Арена героев</a>
    </div>

</div>
</div>
   
<table class="top100_table ng-scope" cellpadding="0" cellspacing="0" ts-wrapper="">
<thead>
    <tr>
 <th ts-criteria="fraction" class="tablesort-sortable"><span>&#9650;</span></th>
	   <th ts-criteria="fraction" class="tablesort-sortable"><span>Фракция</span></th>
        <th ts-criteria="name|lowercase" class="tablesort-sortable"><span>Персонаж</span></th>
		 <th ts-criteria="level|parseInt" class="tablesort-sortable"><span>Уровень</span></th>
        <th ts-criteria="class" class="tablesort-sortable"><span>Класс</span></th>
        <th ts-criteria="race" class="tablesort-sortable"><span>Раса</span></th>

     
		<th ts-criteria="gearscore|parseInt" class="tablesort-sortable"><span>Рейтинг</span></th>
    
    </tr>
   <tr ng-show="inProgress" class="ng-hide">
          <!--<td colspan="8"><img src="/top/images/loading.gif" alt="Загрузка"></td>-->
   </tr>
</thead>
	
<tbody><tr>
<?php $i = 0; while($row = mysql_fetch_array($result,MYSQL_ASSOC)) { $i++ ?>
					<td><?php echo $i;?></td>
						<td><?php echo GetFactionName($row['faction_res_id'])?></td>
						<td><?php echo $row['avatar_name']?>
						 <div class="top100_guild_name ng-binding"><?php echo $row['guild_name']?></div></td>
						<td><?php echo $row['avatar_level']?></td>
						<td><?php echo GetClassName($row['race_class_res_id'])?></td>
						<td><?php echo GetRaceName($row['race_class_res_id'])?></td>
						
						<td><?php echo $row['gear_score']?></td></tr>
<?php } ?>
			</tbody></table>


<div></div>





</div>
<div class="aside" style="position: relative;">