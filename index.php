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
echo "List users:<br>";
echo "<table>";
echo "<tr><td>ID</td><td>Nama</td><td>Kantor</td></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" . $row['Kantor'] . "</td></tr>";
}
} else {
echo "Tidak ada user<br>";
}
$link->close();
?>
