<?php

class CalculoCuotasPrestamoModel
{
    public function calcularCuotaMensual($montoPrestamo, $interesAnual, $plazoMeses)
    {
        // Convertir la tasa de interés anual a mensual
        $interesMensual = ($interesAnual / 12) / 100;

        // Fórmula para cuotas niveladas
        $cuotaMensual = ($montoPrestamo * $interesMensual * pow(1 + $interesMensual, $plazoMeses)) / (pow(1 + $interesMensual, $plazoMeses) - 1);

        return $cuotaMensual;
    }
}

?>
