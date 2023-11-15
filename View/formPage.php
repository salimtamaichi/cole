<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <form action="" method="post" class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="licensePlate" class="form-label">License Plate:</label>
                <input type="text" name="licensePlate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Insert reparation</button>
        </form>

        <a href="reparationPage.php" class="btn btn-secondary">Back</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
