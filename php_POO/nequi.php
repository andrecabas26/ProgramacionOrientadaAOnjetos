<?php

class Nequi {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($monto) {
        if($monto > 0) {
            $this-> saldo += $monto;
            echo "Transferencia exitosa. Nuevo saldo: $this->saldo <br/>";
        }
        else {
            echo "Debes consignar una cantidad mayor a 0";
        }
    }

    public function retirar($monto) {
        if($monto > 0) {
            if($this->saldo >= $monto) {
                $this->saldo -= $monto;
                echo "Retiro de monto realizado. Nuevo saldo: $this->saldo <br/>";
            }
            else {
                echo "No tienes suficientes fondos para retirar la cantidad deseada";
            }
        }
        else {
            echo "El monto a retirar debe ser mayor a cero (0)";
        }
    }

    public function obtenerSaldo() {
        echo "Tu saldo actual es de: $this->saldo <br/>";
    }
}

// Crear una nueva instancia de la clase Nequi
$cuentaMartha = new Nequi("Martha Rodriguez", 100000);

// Mostremos el saldo inicial
$cuentaMartha->obtenerSaldo();     // 100000

// Le voy a enviar a Martha 20000
$cuentaMartha->depositar(20000);

// Volvamos a consultar el saldo de Martha
$cuentaMartha->obtenerSaldo();    // 120000

// Martha sacó plata para una urgencia, saco 50000
$cuentaMartha->retirar(50000);