<?php

class RealProduct extends Product {
    use values;

    function __construct ($name, $description, $basePrice) {
        $this -> setName ($name);
        $this -> setDescription ($description);
        $this -> setPrice ($basePrice);
        $this -> setTotalPrice ($basePrice);
    }

    use setters;
    use getters;
    use priceOperations;
}