<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $Kegiatan = $_POST['Kegiatan'];
    $Deadline = $_POST['Deadline'];

    $sql = "UPDATE tdlis SET Kegiatan='$Kegiatan', Deadline='$Deadline' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list-kegiatan.php');
        exit; 
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>