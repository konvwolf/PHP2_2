<?php

class DigitalProduct extends Product {
    use values;
    private $priceDependant;

    function __construct ($name, $description, $priceDependant, $basePrice) {
        $this -> setName ($name);
        $this -> setDescription ($description);
        $this -> setPriceDependant ($priceDependant);
        $this -> setPrice ($basePrice);
        $this -> setTotalPrice ($basePrice);
    }

    use setters;
    use getters;
    use priceDependancy;
    use priceOperations;
}