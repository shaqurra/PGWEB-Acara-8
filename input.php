<!DOCTYPE html>
<html>
<head>
    <title>Input Data Penduduk</title>
    <style>
        body {
            background-color: #f0e5ff; /* Warna latar belakang ungu muda */
            color: #5e5e5e; /* Warna teks */
            font-family: Arial, sans-serif;
            margin: 0; /* Menghilangkan margin default */
            padding: 20px; /* Padding di sekeliling konten */
        }

        .container {
            max-width: 600px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer */
            background-color: white; /* Warna latar belakang putih untuk kontainer */
            padding: 20px; /* Padding di dalam kontainer */
            border-radius: 8px; /* Sudut melingkar untuk kontainer */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }

        h2 {
            color: #4b0082; /* Warna judul ungu tua */
        }

        label {
            display: block; /* Menampilkan label dalam baris baru */
            margin-top: 10px; /* Jarak atas untuk label */
        }

        input[type="text"] {
            width: 100%; /* Lebar input penuh */
            padding: 8px; /* Padding dalam input */
            margin-top: 5px; /* Jarak atas untuk input */
            border: 1px solid #4b0082; /* Border berwarna ungu tua */
            border-radius: 4px; /* Sudut melingkar */
        }

        input[type="submit"] {
            background-color: #4b0082; /* Warna tombol ungu tua */
            color: white; /* Warna teks tombol putih */
            border: none; /* Tanpa border */
            padding: 10px 15px; /* Padding tombol */
            border-radius: 4px; /* Sudut melingkar tombol */
            cursor: pointer; /* Pointer saat hover */
            margin-top: 10px; /* Jarak atas untuk tombol */
        }

        input[type="submit"]:hover {
            background-color: #5e5e5e; /* Warna tombol saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Data Penduduk</h2>
        <form action="input.php" method="post">
            <label for="kecamatan">Kecamatan:</label>
            <input type="text" name="kecamatan" id="kecamatan" required><br>
            
            <label for="longitude">Longitude:</label>
            <input type="text" name="longitude" id="longitude" required><br>
            
            <label for="latitude">Latitude:</label>
            <input type="text" name="latitude" id="latitude" required><br>
            
            <label for="luas">Luas:</label>
            <input type="text" name="luas" id="luas" required><br>
            
            <label for="jumlah_penduduk">Jumlah Penduduk:</label>
            <input type="text" name="jumlah_penduduk" id="jumlah_penduduk" required><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
