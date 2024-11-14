<?php

include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-kegiatan.php');
    exit; 
}

$id = $_GET['id'];

$sql = "SELECT * FROM tdlis WHERE id=$id";
$query = mysqli_query($db, $sql);
$tudulis = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan | L0124127 </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <header>
            <h3 class="text-center">Edit Kegiatan</h3>
        </header>

        <form action="proses-edit.php" method="POST">
            <fieldset class="border p-4">
                <legend class="w-auto">Form Edit Kegiatan</legend>

                <div class="form-group">
                    <label for="Kegiatan">Kegiatan:</label>
                    <input type="text" class="form-control" name="Kegiatan" placeholder="Kegiatan" value="<?php echo htmlspecialchars($tudulis['Kegiatan']); ?>" required />
                </div>
                <div class="form-group">
                    <label for="Deadline">Deadline:</label>
                    <input type="date" class="form-control" name="Deadline" value="<?php echo htmlspecialchars($tudulis['Deadline']); ?>" required />
                </div>
                
                <input type="hidden" name="id" value="<?php echo $tudulis['id']; ?>" />

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Update" name="simpan" />
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>