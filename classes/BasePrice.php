<?php

class BasePrice { // Singleton-like
    static $basePrice;

    private function __construct () {}
    private function __clone () {}
    private function __wakeup () {}

    public static function getBasePrice ($basePrice) {
        if (!isset($basePrice)) {
            static::$basePrice = $basePrice;
        }

        return $basePrice;
    }
}