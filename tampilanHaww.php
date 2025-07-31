<?php
$servername = "0.0.0.0";
$username = "root";
$password = "root";
$dbname = "hawww";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM hauraImuy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " " . $row["nama"]. " " . $row["tipe"].$row["alamat"].$row["telepon"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #ffffff;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .header {
            display: flex;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #333;
        }
        .header img {
            width: 60px;
            border-radius: 50%;
        }
        .header h2 {
            margin: 0 0 0 10px;
            color: #00aaff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-actions {
            display: flex;
            gap: 10px;
        }
        .form-actions button {
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-actions button:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://via.placeholder.com/60" alt="Admin">
            <h2>Admin - Kelola User</h2>
        </div>
        <form>
            <div class="form-group">
                <label for="tipe-user">Tipe User</label>
                <select id="tipe-user" name="tipe-user">
                    <option value="Vocal">Vocal</option>
                    <option value="Rapper">Rapper</option>
                  <option value="Dancer">Dancer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" id="telepon" name="telepon" placeholder="Masukkan telepon">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password">
            </div>
            <div class="form-actions">
                <button type="button">Tambah</button>
                <button type="button">Edit</button>
                <button type="button">Hapus</button>
            </div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Tipe User</th>
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rapper</td>
                    <td>Mark Lee</td>
                    <td>Canada, Toronto</td>
                    <td>+416 02081999</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Vocal</td>
                    <td>Huáng Rénjùn</td>
                    <td>China, Jilin</td>
                    <td>+86 23032000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rapper</td>
                    <td>Lee Jeno</td>
                    <td>Korea, Incheon</td>
                    <td>+82 23042000</td>
                </tr>
                <tr>
                    <td>4</td>
                  <td>Vocal</td>
                  <td>Lee Haechan</td>
                  <td>Korea, Seoul</td>
                  <td>+82 06062000</td>
                </tr>
              <tr>
                <td>5</td>
                <td>Rapper</td>
                <td>Na Jaemin</td>
                <td>Korea, Busan</td>
                <td>+82 13082000</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Vocal</td>
                <td>Zhong Chenle</td>
                <td>China, Shanghai</td>
                <td>+82 22112001</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Dancer</td>
                <td>Park Jisung</td>
                <td>Korea, Seoul</td>
                <td>+82 05022002</td>
              </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

