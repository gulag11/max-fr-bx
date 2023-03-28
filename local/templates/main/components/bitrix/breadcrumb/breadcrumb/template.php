<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	exit;
}

if (!$arResult) {
	return;
}

if (is_array($arResult)) {
	$countarResult = count($arResult);
}

$strReturn = '';
$itemSize = $countarResult;
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$strReturn .= '
		<li class="breadcrumbs__item" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">';
	$data = '<span itemprop="name">' . $title . '</span><meta itemprop="position" content="' . ($index + 2) . '" />';

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '<a class="breadcrumbs__link" itemprop="item" href="' . $arResult[$index]["LINK"] . '">' . $data . '</a>';
	} else {
		$strReturn .= '<a class="breadcrumbs__txt" itemprop="item" href="' . $arResult[$index]["LINK"] . '">' . $data . '</a>';
	}
}

return $strReturn;
