
<html> <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Entries</title>
</head>
<body>
<h1>User Entries</h1>
<?php
// Establish database connection (replace with your actual database credentials)
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   }

// Fetch all user entries
$result = $conn->query("SELECT * FROM REGISTRATIONS");

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>REGID</th>
                <th>Name</th>
                <th>Email</th>
                <th>PhoneNo</th>
                <th>PASSWORD</th>
                <th>Subject_Code</th>
            </tr>";
while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['REGID']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['PhoneNo']}</td>
                <td>{$row['PASSWORD']}</td>
                <td>{$row['Subject_Code']}</td>
            </tr>";
    }
echo "</table>";
} else {
    echo "No user entries found.";
}
$conn->close();
?>
</body>
</html>

