<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5 p-4">
            <h2 class="mb-4">Lista de Productos</h2>
            <div class="mb-3">
                <a href="./index.php?action=create" class="btn btn-success">Agregar Producto</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Categoría</th>
                            <th scope="col" class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productos as $producto) : ?>
                            <tr>
                                <td><?= htmlspecialchars($producto['name']); ?></td>
                                <td><?= htmlspecialchars($producto['description']); ?></td>
                                <td><?= htmlspecialchars($producto['id_categorie']); ?></td>
                                <td class="text-center">
                                    <a href="index.php?action=edit&id=<?= $producto['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="index.php?action=delete&id=<?= $producto['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-RgI1z2hPeBGBuvd8EKl/rxDdoJ2VRcN3uQ3aTqPfndd0EOw50UBNs6FtxEM8z0V9" crossorigin="anonymous"></script>
</body>
</html>
