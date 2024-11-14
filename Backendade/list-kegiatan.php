<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Gue | L0124127 </title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <header class="mb-4">
            <h3 class="text-center">To Do List Gue</h3>
        </header>

     
        <nav class="mb-3">
            <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
        </nav>

        
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Deadline</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM tdlis";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while($tugas = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$tugas['Kegiatan']."</td>";
                    echo "<td>".$tugas['Deadline']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$tugas['id']."' class='btn btn-warning btn-sm'>Edit</a> ";
                    echo "<a href='hapus.php?id=".$tugas['id']."' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }        
                ?>

            </tbody>
        </table>

        
        <p>Total: <?php echo mysqli_num_rows($query); ?></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>