<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test-mhs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `tb_mahasiswa`.`mhs_nama`,`tb_mahasiswa_nilai`.`nilai`  FROM `tb_mahasiswa_nilai`
INNER JOIN `tb_mahasiswa`
on `tb_mahasiswa_nilai`.`mhs_id` = `tb_mahasiswa`.`mhs_id`
INNER JOIN `tb_matakuliah`
ON `tb_mahasiswa_nilai`.`mk_id` = `tb_matakuliah`.`mk_id`
WHERE `tb_matakuliah`.`mk_kode`= \"MK303\"
order BY `tb_mahasiswa_nilai`.`nilai` DESC
LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["mhs_nama"]. " - Nilai: " . $row["nilai"] . " </br>";
    }
} else {
    echo "0 results";
}
$conn->close();