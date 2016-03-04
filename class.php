<?php

/**
 * Bitrix component menu (webgsite.ru)
 * Компонент для битрикс, многуровневое меню из файла
 *
 * @author    Falur <ienakaev@ya.ru>
 * @link      https://github.com/falur/bitrix.com.menu
 * @copyright 2015 - 2016 webgsite.ru
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-2.0.html
 */

use Bitrix\Main\Application;

class MenuComponent extends CBitrixComponent
{
    protected function getMenuItems()
    {
        $app  = Application::getInstance();
        $srv  = $app->getContext()->getServer();
        $menu = $this->arParams['MENU'];
        $path = $srv->getDocumentRoot() . "/includes/menus/{$menu}.menu.php";

        if (file_exists($path)) {
            return include $path;
        } else {
            throw new Exception('Файл с меню не найден');
            return array();
        }
    }

    public function executeComponent()
    {
        $this->arResult['ITEMS'] = $this->getMenuItems();

        $this->includeComponentTemplate();
    }
}
