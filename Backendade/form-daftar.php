<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Gue | L0124127 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <header>
            <h3 class="text-center">To Do List Gue</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset class="border p-4">
                <legend class="w-auto">Tambah Kegiatan</legend>

                <div class="form-group">
                    <label for="Kegiatan">Kegiatan:</label>
                    <input type="text" class="form-control" name="Kegiatan" placeholder="Kegiatan" required />
                </div>
                <div class="form-group">
                    <label for="Deadline">Deadline:</label>
                    <input type="date" class="form-control" name="Deadline" required />
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Submit" name="daftar" />
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>