<?php
  // Incluir el controlador principal del calculo de cuota
  require 'controllers/CalculoCuotasPrestamoController.php';

  // Estancia del controlador principal del calculo de cuota
  $controller = new CalculoCuotasPrestamoController();
  $controller->handleRequest();
?>
