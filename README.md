# Компонент битрикс - многоуровневое меню

Ищет файл меню в папке `/includes/menus/`

Имя файла должно быть следующего вида: `<название меню>.menu.php`

## Подсключение компонента

```php
$APPLICATION->IncludeComponent(
    'falur:menu',         
    '',         
    array(
        'MENU' => 'top',
    )
);
```

## Файл с меню

```php
return [
    [
        'NAME' => 'Главная',
        'LINK' => '/',
        'CHILD' => [
			[
				'NAME' => 'Дочерний',
				'LINK' => '/child'
			],
	    ]
    ]
]
```
