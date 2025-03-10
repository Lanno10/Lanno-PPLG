<?php
include 'koneksi.php';

// Periksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO kontak (nama, email, no_hp, subjek, pesan) 
            VALUES ('$nama', '$email', '$no_hp', '$subjek', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
