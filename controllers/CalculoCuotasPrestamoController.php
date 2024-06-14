<?php
// Incluir el modelo del calculo de cuota
require_once 'models/CalculoCuotasPrestamoModel.php';

class CalculoCuotasPrestamoController
{
    private $calculoCuotasPrestamo;

    public function __construct()
    {
        // Instancia del modelo
        $this->calculoCuotasPrestamo = new CalculoCuotasPrestamoModel();
    }

    // Manejo de las solicitudes del usuario
    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        // Validación de la acción en el parámetro GET
        switch ($action) {
            // Si el formulario fue enviado se calcula la cuota
            case 'calcularCuota':
                $this->calcularCuota();
                break;
            default:
                $this->mostrarFormulario();
        }
    }

    // Método para mostrar el formulario html
    private function mostrarFormulario()
    {
        include 'views/CalculoCuotasPrestamoForm.php';
    }

    // Método para calcular la cuota mensual del préstamo
    private function calcularCuota()
    {
        $montoPrestamo = $_POST['montoPrestamo'];
        $interesAnual = $_POST['interesAnual'];
        $plazoMeses = $_POST['plazoMeses'];

        $cuotaMensual = $this->calculoCuotasPrestamo->calcularCuotaMensual($montoPrestamo, $interesAnual, $plazoMeses);

        include 'views/CalculoCuotasPrestamoResultado.php';
    }
}

?>
