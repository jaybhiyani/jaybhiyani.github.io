<?php
include 'connection.php';
$sql = "INSERT INTO user_entry (name, email, pass)
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[password]')";
mysqli_query($conn, $sql);
/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
header('Location: index.html');

mysqli_close($conn);
?>