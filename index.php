<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Penduduk</title>
    <style>
        body {
            background-color: #f0e5ff; /* Warna latar belakang ungu muda */
            color: #5e5e5e; /* Warna teks */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px; /* Padding di sekeliling konten */
        }

        h2 {
            color: #4b0082; /* Warna judul ungu tua */
            text-align: center; /* Memusatkan judul */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Jarak atas untuk tabel */
        }

        th, td {
            border: 1px solid #4b0082; /* Border ungu tua */
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #d3b2ff; /* Warna latar belakang header tabel */
        }

        a {
            color: #ff69b4; /* Warna pink untuk tautan */
            text-decoration: none; /* Menghilangkan garis bawah */
        }

        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
            color: #ff1493; /* Warna pink lebih terang saat hover */
        }

        .container {
            max-width: 800px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer */
            background-color: white; /* Warna latar belakang putih untuk kontainer */
            padding: 20px; /* Padding di dalam kontainer */
            border-radius: 8px; /* Sudut melingkar untuk kontainer */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Data Penduduk</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pgweb_acara8";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM kab_sleman";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr>
            <th>Kecamatan</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>
            <th>Aksi</th></tr>";

            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["kecamatan"] . "</td>
                    <td>" . $row["longitude"] . "</td>
                    <td>" . $row["latitude"] . "</td>
                    <td>" . $row["luas"] . "</td>
                    <td align='right'>" . $row["jumlah_penduduk"] . "</td>
                    <td>
                        <a href='delete.php?kecamatan=" . urlencode($row["kecamatan"]) . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Delete</a>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
