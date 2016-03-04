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
    <? if (isset($arItem['CHILD']) && !empty($arItem['CHILD'])): ?>
        <li class="dropdown <?= in_array($APPLICATION->GetCurDir(), array_column($arItem['CHILD'], 'LINK'))
                                ? ' active'
                                : '' ?>">
        <a href="<?= $arItem['LINK'] ?>"
            class="dropdown-toggle"
            data-toggle="dropdown"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
        >
            <?= $arItem['NAME'] ?>
            <span class="caret"></span>
        </a>

        <ul class="dropdown-menu">
            <? foreach ($arItem['CHILD'] as $childItem): ?>
                <li>
                    <a href="<?= $childItem['LINK'] ?>">
                        <?= $childItem['NAME'] ?>
                    </a>
                </li>
            <? endforeach; ?>
        </ul>
    </li>
    <? else: ?>
    <li<?= $APPLICATION->GetCurDir() == $arItem['LINK'] ? ' class="active"' : '' ?>>
        <a href="<?= $arItem['LINK'] ?>">
            <?= $arItem['NAME'] ?>
        </a>
    </li>
    <? endif; ?>
<? endforeach; ?>