<?php

use Bitrix\Main\Application;

class Menu extends CBitrixComponent
{
	protected function getMenuItems()
	{
		$app	 = Application::getInstance();
		$srv	 = $app->getContext()->getServer();
		$menu	 = $this->arParams['MENU'];
		$path	 = $srv->getDocumentRoot() . "/includes/menus/{$menu}.menu.php";
		
		if (file_exists($path))
			return include $path;
		else
		{
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
