<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connect to MYSQL</title>
</head>
<body>
<?php //Script 12.1 - mysqli_connect.php

// Attempt to connect to MySQL and print out messages:

if ($dbc = mysqli_connect('localhost', 'root', 'cali1984', 'myblog')) {

print '<p>Successfully connected to the database!</p>';

mysqli_close($dbc); // Close the connection.
} else {

print '<p style="color: red;">Could not connect to the database.</p>';
}
?>
</body>
</html>