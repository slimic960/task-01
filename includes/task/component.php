<?php
	$arResult = [];

	$arResult['ITEMS'] = [
		[
			'NAME' => 'Футболка с длинным рукавом',
			'PRODUCER' => 'Oodji',
			'OFFERS' => [
				[
					'SIZE' => 'S',
					'COLOR' => 'красный',
					'QUANTITY' => 10,
					'PRICE' => 100
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'красный',
					'QUANTITY' => 1,
					'PRICE' => 100 
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'красный',
					'QUANTITY' => 0,
					'PRICE' => 100 
				],
				[
					'SIZE' => 'S',
					'COLOR' => 'зеленый',
					'QUANTITY' => 2,
					'PRICE' => 120
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'зеленый',
					'QUANTITY' => 3,
					'PRICE' => 120 
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'зеленый',
					'QUANTITY' => 3,
					'PRICE' => 120
				],
			] 
		],
		[
			'NAME' => 'Футболка хлопковая с двойным рукавом',
			'PRODUCER' => 'Oodji',
			'OFFERS' => [
				[
					'SIZE' => 'S',
					'COLOR' => 'синий',
					'QUANTITY' => 7,
					'PRICE' => 150
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'красный',
					'QUANTITY' => 0,
					'PRICE' => 150
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'зеленый',
					'QUANTITY' => 2,
					'PRICE' => 150
				]
			] 
		],
		[
			'NAME' => 'Футболка с контрастными надписями',
			'PRODUCER' => 'gloria jeans',
			'OFFERS' => [
				[
					'SIZE' => 'S',
					'COLOR' => 'синий',
					'QUANTITY' => 4,
					'PRICE' => 150
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'зеленый',
					'QUANTITY' => 2,
					'PRICE' => 150
				],
				[
					'SIZE' => 'S',
					'COLOR' => 'зеленый',
					'QUANTITY' => 0,
					'PRICE' => 170
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'красный',
					'QUANTITY' => 0,
					'PRICE' => 180
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'красный',
					'QUANTITY' => 2,
					'PRICE' => 200 
				]
			] 
		],
		[
			'NAME' => 'Футболка Trefoil',
			'PRODUCER' => 'adidas',
			'OFFERS' => [
				[
					'SIZE' => 'S',
					'COLOR' => 'красный',
					'QUANTITY' => 1,
					'PRICE' => 250
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'красный',
					'QUANTITY' => 2,
					'PRICE' => 270
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'красный',
					'QUANTITY' => 3,
					'PRICE' => 300
				],
				[
					'SIZE' => 'S',
					'COLOR' => 'зеленый',
					'QUANTITY' => 1,
					'PRICE' => 250
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'зеленый',
					'QUANTITY' => 1,
					'PRICE' => 270
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'зеленый',
					'QUANTITY' => 0,
					'PRICE' => 300
				],
				[
					'SIZE' => 'S',
					'COLOR' => 'синий',
					'QUANTITY' => 1,
					'PRICE' => 250
				],
				[
					'SIZE' => 'M',
					'COLOR' => 'синий',
					'QUANTITY' => 1,
					'PRICE' => 270 
				],
				[
					'SIZE' => 'L',
					'COLOR' => 'синий',
					'QUANTITY' => 0,
					'PRICE' => 300
				]
			] 
		]
	];

	require 'result_modifier.php';
	require 'template.php';
?>