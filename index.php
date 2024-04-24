<!DOCTYPE html>
<html>
<body>

<?php
// MySQL server config
$servername = getenv('MYSQL_HOST');
$username = "GuestReader";
$password = "JustAnExample";
$dbname = "guestbook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM guests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["firstname"]." ".$row["lastname"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
