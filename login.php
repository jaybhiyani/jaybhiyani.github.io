<?php
include 'connection.php';
$sql = "SELECT pass from user_entry WHERE email='$_POST[user]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "pass: " . $row["pass"]."<br>";
    }
} else {
    echo "0 results";
}

/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
header('Location: index.html');

mysqli_close($conn);
?> 