<?php

abstract class Product {
    abstract function setName ($name);
    abstract function setDescription ($description);
    abstract function getName ();
    abstract function getDescription ();
}