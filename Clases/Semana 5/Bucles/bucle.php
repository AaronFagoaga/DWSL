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
            <form action="bucle.php" method="POST">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4">
                        <h5 style="text-align: center;">Kaname Motors.</h5>
                        <label for="N1">Ingrese la marca del vehículo que busca:</label>
                        <input type="text" class="form-control" name="txtBrand" id="txtBrand">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card m-auto mt-3 p-4">
            <div class="row justify-content-center">
                <div class="col-md-6" style="text-align: center;">
                    <?php
                        $brand = "";
                        $brand = $_POST["txtBrand"];

                        $puellaBrands = ['Toyota', 'Nissan', 'Mitsubishi', 'Ford', 'Chevrolet', 'Cadillac', 'Hyundai'];

                        foreach ($puellaBrands as $theBrand) {
                            if($brand == $theBrand){
                                $result = 'La marca '. $theBrand. ' está disponible en nuestras agencias.';
                                break;
                            }
                            else{
                                $result = 'La marca no existe en nuestras agencias.'; 
                            }
                        }
                        echo $result;
                    ?>
                </div>
            </div>
        </div>            
    </div>
</body>
</html>