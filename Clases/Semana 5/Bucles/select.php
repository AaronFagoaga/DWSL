<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card m-auto mt-5 p-4">
            <form action="select.php" method="POST">
                <div class="row justify-content-center mb-4">
                    <div style="text-align: center;" class="col-md-4">
                        <label for="cantidad">Imagenes a generar:</label>
                        <br><br>
                        <select name="cantidad" id="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>                        
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn btn-success">Generar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card m-auto mt-3 p-4">
            <div class="row justify-content-center">
                <div class="col-md-6" style="text-align: center;">
                    <?php
                        $cantidad = 0;
                        $cantidad = $_POST['cantidad'];

                        $imagen = "https://picsum.photos/150/150?random";

                        echo "Generando $cantidad imágenes: <br>";

                        for ($i = 0; $i < $cantidad; $i++) {

                            echo "<img src=\"$imagen\" alt=\"Random igm\">";
                        }
                    
                    ?>
                </div>
            </div>
        </div>            
    </div>
</body>
</html>