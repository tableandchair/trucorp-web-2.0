<?php
echo "SELAMAT DATANG DI TRUCORP-WEB-2.0<br><br>";

$link = mysqli_connect("172.19.0.2", "root", "secretpass");
if (!$link) {
echo "Gagal koneksi ke MySQL" . PHP_EOL;
exit;
}

$link->select_db("Trucorp");
$query = "SELECT * FROM users";
$result = $link->query($query);
if ($result->num_rows > 0) {
echo "Total jumlah user: " . $result->num_rows . " user(s)<br>";
} else {
echo "Tidak ada user<br>";
}
$link->close();
?>
