<?php

interface PaymentMethod
{
    public function processPayment($amount);
}

class CreditCardPayment implements PaymentMethod
{
    public function processPayment($amount)
    {
        return "Processing credit card payment: $" . $amount . PHP_EOL;
    }
}

class PayPalPayment implements PaymentMethod 
{
    public function processPayment($amount) 
    {
        return "Processing PayPal payment: $" . $amount . PHP_EOL;
    }
}

class PaymentProcessor 
{
    private $paymentMethod;

    public function __construct($paymentMethod) 
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function process($amount)
    {
        $this->paymentMethod->processPayment($amount);
    }
}

$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();

$processorCreditCard = new PaymentProcessor($creditCardPayment);
echo $processorCreditCard->process(100);

$processorPaypal = new PaymentProcessor($payPalPayment);
$processorPaypal->process(50);

