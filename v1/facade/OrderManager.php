<?php

namespace DesignPattern\v1\facade;

class OrderManager
{

    public function createOrder($customerData,$orderData){
        return New Order();
    }
}