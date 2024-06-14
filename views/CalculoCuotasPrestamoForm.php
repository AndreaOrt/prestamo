<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Cuota Mensual del Préstamo</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <style>
        body {background-color: #f0f0f0;}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h2>Cálculo de Cuota Mensual de Préstamo</h2>
            </div>
            <div class="card-body">
                <form action="?action=calcularCuota" method="POST">
                    <div class="form-group">
                        <label for="montoPrestamo">Monto del Préstamo:</label>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text" id="btnGroupMonto">L.</div>
                        <input type="number" class="form-control" id="montoPrestamo" name="montoPrestamo" required placeholder="Ingrese el monto" aria-describedby="btnGroupMonto">
                    </div>
                    <div class="form-group mb-3">
                        <label for="interesAnual">Tasa de Interés Anual (%):</label>
                        <input type="number" class="form-control" id="interesAnual" name="interesAnual" step="0.01" required placeholder="Ej: 8">
                    </div>
                    <div class="form-group mb-3">
                        <label for="plazoMeses">Plazo del Préstamo (meses):</label>
                        <input type="number" class="form-control" id="plazoMeses" name="plazoMeses" required placeholder="Ej: 24">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calcular Cuota Mensual</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
