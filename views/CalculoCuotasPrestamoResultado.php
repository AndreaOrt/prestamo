<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de la Cuota Mensual del Préstamo</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h2>Resultado del Cálculo de Cuota Mensual de Préstamo</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Monto del Préstamo</td>
                            <td>L. <?php echo number_format($montoPrestamo, 2); ?></td>
                        </tr>
                        <tr>
                            <td>Tasa de Interés Anual (%)</td>
                            <td><?php echo number_format($interesAnual, 2); ?> %</td>
                        </tr>
                        <tr>
                            <td>Plazo del Préstamo (meses)</td>
                            <td><?php echo $plazoMeses; ?></td>
                        </tr>
                        <tr class="table-info">
                            <td class="fw-bold">Monto de la Cuota Mensual:</td>
                            <td class="fw-bold">L. <?php echo number_format($cuotaMensual, 2); ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>
