<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image; // Importa el namespace adecuado
require_once "../Controller/ControllerReparation.php";

$controllerReparation = new ControllerReparation(new ServiceReparation());
$controllerReparation->getService()->connect();



if(isset($_GET["getReparation"]) && isset($_GET["idReparation"])) {
    $reparationId = $_GET["idReparation"];
    $reparation = $controllerReparation->getReparation($reparationId);

    // Verificar si se obtuvo la reparación y la imagen
    if($reparation[0]) {
        // Establecer el tipo MIME de la respuesta como una imagen JPEG
        // header('Cont ent-Type: image/jpg');

        // Mostrar la imagen almacenada en el BLOB
        echo "<img src=".$reparation[0]["photo"].">";
        
    }
}

//Insertar reparación
if (isset($_POST["insert"])) {

    $name = $_POST["insertName"];
    $date = $_POST["insertDate"];
    $licensePlate = $_POST["insertLicensePlate"];
    
    // Procesamiento de la imagen con Intervention Image
    $uploadedFile = $_FILES['insertPhoto'];
    $photoPath = $uploadedFile['tmp_name'];
    $photo = Image::make($photoPath);    
    $controllerReparation->insertReparation(new Reparation($name, $date, $licensePlate, $photo));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!--GET-->
    <div class="container mt-4">
        <form action="" method="get" class="mb-3">
            <input type="text" name="idReparation" class="form-control">
            <button type="submit" name="getReparation" class="btn btn-primary mt-2">Search</button>
        </form>

        <a href="formPage.php" class="btn btn-primary">Insertar reparación</a>

        <a href="index.php">Back</a>
    </div>

    <!--INSERT-->
    <div class="container mt-4">
        <form action="" method="post" enctype="multipart/form-data" class="mb-3">
            <div class="mb-3">
                <label for="insertName" class="form-label">Name:</label>
                <input type="text" name="insertName" class="form-control">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" name="insertDate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="licensePlate" class="form-label">License Plate:</label>
                <input type="text" name="insertLicensePlate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" name="insertPhoto" class="form-control">
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Insert reparation</button>
        </form>

        <a href="index.php" class="btn btn-secondary">Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>