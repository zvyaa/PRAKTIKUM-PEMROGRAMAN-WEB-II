<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 7px;
            text-align: left;
        }
        th {
            background-color: #D3D3D3;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["nama" => "Andi",    "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi",    "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono",    "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
];

foreach ($mahasiswa as &$m) {
    $m['nilai_akhir'] = (0.4 * $m['uts']) + (0.6 * $m['uas']);

    if ($m['nilai_akhir'] >= 80) {
        $m['huruf'] = 'A';
    } elseif ($m['nilai_akhir'] >= 70) {
        $m['huruf'] = 'B';
    } elseif ($m['nilai_akhir'] >= 60) {
        $m['huruf'] = 'C';
    } elseif ($m['nilai_akhir'] >= 50) {
        $m['huruf'] = 'D';
    } else {
        $m['huruf'] = 'E';
    }
}
unset($m); // ← tambah ini

echo "<table>";
echo "<tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach ($mahasiswa as $m) {
    echo "<tr>
            <td>{$m['nama']}</td>
            <td>{$m['nim']}</td>
            <td>{$m['uts']}</td>
            <td>{$m['uas']}</td>
            <td>{$m['nilai_akhir']}</td>
            <td>{$m['huruf']}</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>