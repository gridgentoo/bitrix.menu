<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * Bitrix component menu (webgsite.ru)
 * Компонент для битрикс, многуровневое меню из файла
 *
 * @author    Falur <ienakaev@ya.ru>
 * @link      https://github.com/falur/bitrix.com.menu
 * @copyright 2015 - 2016 webgsite.ru
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-2.0.html
 */

$tree = function ($menu) use (&$tree) {
    global $APPLICATION;
    $curPage = $APPLICATION->GetCurDir();

    foreach ($menu as $item) {
        $active = (rtrim($curPage, '/') == rtrim($item['LINK'], '/'));
        $parent = (isset($item['CHILD']) && !empty($item['CHILD']));
        $class  = '';
        $attr   = '';

        if ($active && $parent) {
            $class = ' class="uk-active uk-parent"';
            $attr  = '';
        } elseif ($active) {
            $class = ' class="uk-active"';
        } elseif ($parent) {
            $class = ' class="uk-parent"';
            $attr  = '';
        }

        echo '<li'.$class.$attr.'>';
        echo '<a href="'.$item['LINK'].'">';
        echo $item['NAME'];
        echo '</a>';

        if ($parent) {
            echo '<ul class="uk-nav-sub">';
            $tree($item['CHILD']);
            echo '</ul>';
        }

        echo '</li>';
    }
};

$tree($arResult['ITEMS']);
