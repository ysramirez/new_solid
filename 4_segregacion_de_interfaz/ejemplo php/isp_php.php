<?php

interface BasicOperations {
    public function deposit($amount);
    public function withdraw($amount);
    public function checkBalance();
}

interface Loans {
    public function grantLoan($amount);
}

class RegularClient implements BasicOperations {
    private $balance = 1000;

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposit made. Current balance: $" . $this->balance . PHP_EOL;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawal made. Current balance: $" . $this->balance . PHP_EOL;
        } else {
            echo "Insufficient funds." . PHP_EOL;
        }
    }

    public function checkBalance() {
        echo "The balance is: $" . $this->balance . PHP_EOL;
    }
}

class BankManager implements BasicOperations, Loans {
    private $balance = 50000;

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposit made by the manager. Current balance: $" . $this->balance . PHP_EOL;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawal made by the manager. Current balance: $" . $this->balance . PHP_EOL;
        } else {
            echo "Insufficient funds." . PHP_EOL;
        }
    }

    public function checkBalance() {
        echo "The manager's balance is: $" . $this->balance . PHP_EOL;
    }

    public function grantLoan($amount) {
        echo "The manager has granted a loan of $" . $amount . PHP_EOL;
    }
}

$client = new RegularClient();
$client->deposit(500);
$client->withdraw(200);
$client->checkBalance();

$manager = new BankManager();
$manager->grantLoan(10000);
$manager->checkBalance();
