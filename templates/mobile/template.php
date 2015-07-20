<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$tree = function ($menu) use (&$tree)
{
	global $APPLICATION;
	$curPage = $APPLICATION->GetCurPage();
	
	foreach ($menu as $item)
	{	
		$active	 = (rtrim($curPage, '/') == rtrim($item['LINK'], '/'));
		$parent	 = (isset($item['CHILD']) && !empty($item['CHILD']));
		$class	 = '';
		$attr	 = '';
		
		if ($active && $parent)
		{
			$class = ' class="uk-active uk-parent"';
			$attr = '';
		}
		elseif ($active)
		{
			$class = ' class="uk-active"';
		}
		elseif ($parent)
		{
			$class = ' class="uk-parent"';
			$attr = '';
		}		
		
		echo '<li'. $class . $attr .'>';
		echo '<a href="'.$item['LINK'].'">';
		echo $item['NAME'];
		echo '</a>';
		
		if ($parent)
		{
			echo   '<ul class="uk-nav-sub">';
						$tree($item['CHILD']);
			echo   '</ul>';
		}
		
		echo '</li>';
	}
};

$tree($arResult['ITEMS']);
