<?php

class CreditCardPayment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function processPayment() {
        return "Processing credit card payment: $" . $this->amount . PHP_EOL;
    }
}

class PayPalPayment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function processPayment() {
        return "Processing PayPal payment: $" . $this->amount . PHP_EOL;
    }
}

class PaymentProcessor {
    public function payWithCreditCard($amount) {
        $payment = new CreditCardPayment($amount);
        return $payment->processPayment(); // Direct dependency on CreditCardPayment
    }

    public function payWithPayPal($amount) {
        $payment = new PayPalPayment($amount);
        return $payment->processPayment(); // Direct dependency on PayPalPayment
    }
}


$processor = new PaymentProcessor();
echo $processor->payWithCreditCard(100);
echo $processor->payWithPayPal(50);

