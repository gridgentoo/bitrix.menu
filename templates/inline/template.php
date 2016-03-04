<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * Bitrix component menu (webgsite.ru)
 * Компонент для битрикс, многуровневое меню из файла
 *
 * @author    Falur <ienakaev@ya.ru>
 * @link      https://github.com/falur/bitrix.com.menu
 * @copyright 2015 - 2016 webgsite.ru
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<? foreach ($arResult['ITEMS'] as $arItem): ?>
	<a href="<?= $arItem['LINK'] ?>">
		<?= $arItem['NAME'] ?>
	</a>
<? endforeach; ?>