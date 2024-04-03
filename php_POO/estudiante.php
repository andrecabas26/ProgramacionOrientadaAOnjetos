<?php

class Estudiante {
    private $nombre;
    private $notas;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->notas = [];
    }

    public function agregarNota($nota) {
        $this->notas[] = $nota;
    }

    public function calcularPromedio() {
        $totalNotas = count($this->notas);
        if($totalNotas === 0) {
            return 0;
        }
        $sumaNotas = array_sum($this->notas);
        return $sumaNotas / $totalNotas;
    }

    public function mostrarInformacion() {
        echo "Nombre: $this->nombre <br/>";
        echo "Notas: " . implode(" | ", $this->notas) ."<br/>";
        echo "Promedio: " . $this->calcularPromedio() . "<br/>";
    }
}

// Crear un nuevo estudiante
$samy = new Estudiante("Samy");

// Agregar notas
$samy->agregarNota(3.8);
$samy->agregarNota(4.2);
$samy->agregarNota(3.5);
$samy->agregarNota(1);

// Mostrar la información académica de Samy
$samy->mostrarInformacion();