<html>
<body>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gasnezzz</title>
</head>

<body>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapinfo";

// Create connection (improved error handling)
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch(mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare data (prevent SQL injection)
$nama = mysqli_real_escape_string($conn, $_POST["Name"]); 
$nim1 = mysqli_real_escape_string($conn, $_POST["Email"]); 
$TTL = mysqli_real_escape_string($conn, $_POST["Subject"]); 
$telepon = mysqli_real_escape_string($conn, $_POST["Message"]); 
$penyakit = mysqli_real_escape_string($conn, $_POST["Submit"]); 

// Prepared statement (more secure approach)
$sql = "INSERT INTO website (Name, Email, Subject, Message, Submit) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssssssss", $Name, $Email, $Subject, $Message, $Submit); 

// Execute prepared statement
$stmt->execute();

// Check for errors and display message
if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "Data baru berhasil disimpan";
}

// Close connection
$stmt->close();
$conn->close();

?>
</html>
