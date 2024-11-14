<?php

include("config.php");

if(isset($_POST['daftar'])){

    $Kegiatan = $_POST['Kegiatan'];
    $Deadline = $_POST['Deadline'];

    $sql = "INSERT INTO tdlis (Kegiatan, Deadline) VALUES ('$Kegiatan', '$Deadline')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
?>