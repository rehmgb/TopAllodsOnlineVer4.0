
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
	<a href="/top/index.php?option=gs" class="ratings__button ratings__button--gearscore" ng-class="{active:active == \'gs\'}">Экипировка</a>
	<a href="/top/index.php?option=guild" class="ratings__button ratings__button--guilds" ng-class="{active:active == \'guild\'}">Гильдии</a>
	<a href="/top/index.php?option=ship" class="ratings__button ratings__button--ships active" ng-class="{active:active == \'ship\'}">Корабли</a>
		<a href="/top/index.php?option=arena" class="ratings__button ratings__button&#45;&#45;arena" ng-class="{active:active == \'arena\'}">Арена героев</a>
    </div>

</div></div>


<table class="top100_table ng-scope" cellpadding="0" cellspacing="0" ts-wrapper="">
<thead>
    <tr>
	    </tr>
   <tr ng-show="inProgress" class="ng-hide">
          <!--<td colspan="8"><img src="/top/images/loading.gif" alt="Загрузка"></td>-->
   </tr>
</thead>
	
<tbody><tr>

			</tbody></table>
