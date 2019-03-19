<?php
include 'connection.php';
$pass = md5($_POST[password]);
$sql = "INSERT INTO user_entry (name, email, pass)
VALUES ('$_POST[name]', '$_POST[email]', '$pass')";
mysqli_query($conn, $sql);

	echo '<script>
	alert("You are signed in... Now Log in..");
	</script>';
/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
header('Location: index.php');

mysqli_close($conn);
?>