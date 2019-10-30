<?php

trait values {
    private $name;
    private $description;
    private $price;
    private $totalPrice;
}

trait setters {
    function setName ($name) {
        $this -> name = $name;
    }

    function setDescription ($description) {
        $this -> description = $description;
    }

    function setPrice ($basePrice) {
        if ($this -> priceDependant) {
            $this -> price = $basePrice * $this -> priceDependant;
        } else {
            $this -> price = $basePrice;
        }
    }
}

trait getters {
    function getName () {
        return $this -> name;
    }

    function getDescription () {
        return $this -> description;
    }

    function getTotalPrice () {
        return $this -> totalPrice;
    }

    function getPrice () {
        return $this -> price;
    }
}

trait priceDependancy {
    function setPriceDependant ($priceDependant) {
        $this -> priceDependant = $priceDependant;
    }
}

trait priceOperations {
    function setTotalPrice ($basePrice, $quantity = 1) {
        switch (true) {
            case $this -> priceDependant > 0:
                $this -> totalPrice = $basePrice * $this -> priceDependant * $quantity;
                break;
            default:
                $this -> totalPrice = $basePrice;
        }
    }
}