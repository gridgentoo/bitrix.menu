<? foreach ($arResult['ITEMS'] as $arItem): ?>
	<a href="<?= $arItem['LINK'] ?>">
		<?= $arItem['NAME'] ?>
	</a>
<? endforeach; ?>