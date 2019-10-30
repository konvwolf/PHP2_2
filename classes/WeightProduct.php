<?php

class WeightProduct extends Product {
    use values;
    private $priceDependant;

    function __construct ($name, $description, $priceDependant, $basePrice, $quantity) {
        $this -> setName ($name);
        $this -> setDescription ($description);
        $this -> setPriceDependant ($priceDependant);
        $this -> setPrice ($basePrice);
        $this -> setTotalPrice ($basePrice, $quantity);
    }

    use setters;
    use getters;
    use priceDependancy;
    use priceOperations;
}