<?php
include ('traits' . DIRECTORY_SEPARATOR . 'traits.php');
include ('catalog' . DIRECTORY_SEPARATOR . 'productsList.php');
spl_autoload_register(function($filename) { include ('classes' . DIRECTORY_SEPARATOR . $filename . '.php'); });

$quantity = 5; // количество весового товара, можно указать любое число

if (isset($productsList)) {
    $product = new CreateProduct;

    foreach ($productsList as $val) {
        if ($val['basePrice'] > 0 and $val['priceDependant'] == 0) {
            $basePrice = BasePrice::getBasePrice ($val['basePrice']);
        }

        if ($val['type'] == 'single') {
            $realProd = $product -> makeRealProduct ($val['name'], $val['description'],  $basePrice);
        } else if ($val['type'] == 'digital') {
            $realProd = $product -> makeDigitalProduct ($val['name'], $val['description'], $val['priceDependant'], $basePrice);
        } else {
            $realProd = $product -> makeWeightProduct ($val['name'], $val['description'], $val['priceDependant'], $basePrice, $quantity);
            $quantityToBuy = ' Вы хотите купить ' . $quantity . ' штук за ' . $realProd -> getTotalPrice () . '.';
        }
        
        echo $realProd -> getName () . '.<br>' . $realProd -> getDescription () . '.<br>Стоимость этого товара составляет ' .
            $realProd -> getPrice () . ' рублей.<br>' . $quantityToBuy . '<br>';
    }
}