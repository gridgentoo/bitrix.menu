<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
	'GROUPS' => [],
	'PARAMETERS' => [
		'MENU' => [
            'PARENT' => 'BASE',
			'NAME' => GetMessage('FALUR_COM_MENU_TYPE_MENU'),
			'TYPE' => 'STRING',
			'DEFAULT' => 'top',
		],
	],
];
