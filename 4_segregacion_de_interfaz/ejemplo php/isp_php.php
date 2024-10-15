<?php

interface OperacionesBancarias {
    public function depositar($monto);
    public function retirar($monto);
    public function consultarSaldo();
    public function concederPrestamo($monto);
}

class ClienteRegular implements OperacionesBancarias {
    private $saldo = 1000;

    public function depositar($monto) {
        $this->saldo += $monto;
        echo "Depósito realizado. Saldo actual: $" . $this->saldo . "<br>";
    }

    public function retirar($monto) {
        if ($this->saldo >= $monto) {
            $this->saldo -= $monto;
            echo "Retiro realizado. Saldo actual: $" . $this->saldo . "<br>";
        } else {
            echo "Fondos insuficientes.<br>";
        }
    }

    public function consultarSaldo() {
        echo "El saldo es: $" . $this->saldo . "<br>";
    }

    public function concederPrestamo($monto) {        
        echo "Un cliente regular no puede conceder préstamos.<br>";
    }
}

class GerenteBanco implements OperacionesBancarias {
    private $saldo = 50000;

    public function depositar($monto) {
        $this->saldo += $monto;
        echo "Depósito realizado por el gerente. Saldo actual: $" . $this->saldo . "<br>";
    }

    public function retirar($monto) {
        if ($this->saldo >= $monto) {
            $this->saldo -= $monto;
            echo "Retiro realizado por el gerente. Saldo actual: $" . $this->saldo . "<br>";
        } else {
            echo "Fondos insuficientes.<br>";
        }
    }

    public function consultarSaldo() {
        echo "El saldo del gerente es: $" . $this->saldo . "<br>";
    }

    public function concederPrestamo($monto) {
        echo "El gerente ha concedido un préstamo de $" . $monto . "<br>";
    }
}

$cliente = new ClienteRegular();
$cliente->depositar(500);
$cliente->retirar(200);
$cliente->concederPrestamo(1000); // Método innecesario

$gerente = new GerenteBanco();
$gerente->concederPrestamo(10000);
$gerente->consultarSaldo();
