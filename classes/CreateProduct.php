<?php

class CreateProduct {
    function makeRealProduct ($name, $description, $basePrice) {
        return new RealProduct ($name, $description, $basePrice);
    }

    function makeDigitalProduct ($name, $description, $priceDependant, $basePrice) {
        return new DigitalProduct ($name, $description, $priceDependant, $basePrice);
    }

    function makeWeightProduct ($name, $description, $priceDependant, $basePrice, $quantity) {
        return new WeightProduct ($name, $description, $priceDependant, $basePrice, $quantity);
    }
}