<?php

namespace DesignPattern\v1\facade;

class EcommerceFacade
{
    /**
     * @var OrderManager
     */
    private $orderManager;
    /**
     * @var PaymentProcessor
     */
    private $paymentProcessor;
    /**
     * @var ShippingManager
     */
    private $shippingManager;

    public function __construct(OrderManager $orderManager, PaymentProcessor $paymentProcessor, ShippingManager $shippingManager)
    {
        $this->orderManager = $orderManager;
        $this->paymentProcessor = $paymentProcessor;
        $this->shippingManager = $shippingManager;
    }

    public function placeOrder($costumer,$items){
        $paymentStatus = $this->paymentProcessor->procssPayment($costumer,$items);
        if ('success' == strtolower($paymentStatus)){
            $order = $this->orderManager->createOrder($costumer,$items);
            $shipping = $this->shippingManager->shipOrder($order);
            if ('success' == strtolower($shipping)){
                return "your order on way";
            }else{
                return "ERROR#". $shipping;
            }
        }else{
            return "Error# "  . $paymentStatus;
        }
    }
}