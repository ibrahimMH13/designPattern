
<?php

use DesignPattern\v1\facade\OrderManager;
use DesignPattern\v1\facade\PaymentProcessor;
use DesignPattern\v1\facade\ShippingManager;

require './vendor/autoload.php';

    $facde = new \DesignPattern\v1\facade\EcommerceFacade(new OrderManager(),new PaymentProcessor(),new ShippingManager());
    echo $facde->placeOrder('ibrahim','ps5');